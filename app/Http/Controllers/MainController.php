<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\breed;
use App\Models\animal;
use App\Models\fotoanimal;
use App\Models\subscription;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $slider = animal::with('animal_Photo')->where("status", 2)->orderby('created_at', 'desc')->take(3)->get();
        $animals = animal::with('animal_Photo')->where("status", 3)->take(6)->get();
        $comments = comment::orderby('created_at', 'desc')->take(3)->get();
        return view('index', ['slider' => $slider, 'animals' => $animals, 'comments' => $comments]);
    }

    public function sub(Request $request)
    {
        $subInfo = $request->all();
        $subCreate = subscription::create([
            'email' => $subInfo['email'],
        ]);
        if ($subCreate) {
            return redirect('/')->with('success', 'Вы подписались на рассылку');
        } else {
            return redirect('/')->with('error', 'Ошибка');
        }
    }
    public function comments(Request $request)
    {
        $commentInfo = $request->all();
        $imgPath = $request->file('img')->hashName();
        $request->file('img')->storeAs('img', $imgPath, 'public');
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        } else {
            return redirect('/')->with('error', 'Пользователь не аутентифицирован');
        }
        $commentCreate = comment::create([
            'text_comment' => $commentInfo['text_comment'],
            'img' => $imgPath,
            'user_id' => $user_id
        ]);

        if ($commentCreate) {
            return redirect('/')->with('success', 'Вы оставили комментарий');
        } else {
            return redirect('/')->with('error', 'Ошибка');
        }
    }

    public function addcard()
    {
        $breeds = breed::all();
        return view('addcard', ['breeds' => $breeds]);
    }
    public function addcard_validate(Request $request)
    {
        $request->validate([
            "additionalInfo" => "required",
            "district" => "required",
            "foundDate" => "required",
            "breed" => "required",
            "animalPhoto" => "required",
            "check" => "required",
        ], [
            "additionalInfo.required" => "Поле обязательно для заполнения",
            "district.required" => "Поле обязательно для заполнения",
            "foundDate.required" => "Поле обязательно для заполнения",
            "breed.required" => "Поле обязательно для заполнения",
            "animalPhoto.required" => "Поле обязательно для заполнения",
            "check.required" => "Поставьте галочку напротив обработки персональных данных!",
        ]);

        $animalsInfo = $request->all();
        $author = Auth::user()->id;
        $animalsAdd = animal::create([
            'claim' => $animalsInfo['claim'],
            'additionalInfo' => $animalsInfo['additionalInfo'],
            'district' => $animalsInfo['district'],
            'foundDate' => $animalsInfo['foundDate'],
            'breed_id' => $animalsInfo['breed'],
            'status' => 1,
            'users' => $author,
        ]);
        $photo = $request->file('animalPhoto');
        if (isset($photo)) {
            foreach ($photo as $photos) {
                $name = $photos->hashName();
                $patch = $photos->store('public/img');
                fotoanimal::create([
                    'id_animal' => $animalsAdd->id,
                    'animalPhoto' => $name,
                ]);
            }
        }
        if ($animalsAdd && $photo) {
            return redirect()->back()->with('success', 'Добавление прошло успешно!');
        } else {
            return redirect()->back()->with('error', 'Произошла ошибка!');
        }
    }

    public function card($id)
    {
        $cardinfo = animal::find($id);
        return view('card', ['cardinfo' => $cardinfo]);
    }

    public function search()
    {
        $animals = animal::where("status", 2)->paginate(10);
        return view('search', ['animals' => $animals]);
    }
}
