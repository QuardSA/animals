<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\breed;
use App\Models\animal;
use App\Models\fotoanimal;
use App\Models\subscription;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function registration()
    {
        return view('registartion');
    }
    public function registration_validate(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|alpha',
                'surname' => 'required|alpha',
                'phone' => 'required',
                'email' => 'required|unique:users|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ],
            [
                'email.required' => 'Поле обязательно для заполнения',
                'phone.required' => 'Поле обязательно для заполнения',
                'email.email' => 'Введите email',
                'email.unique' => 'Данный email уже занят',
                'name.required' => 'Поле обязательно для заполнения',
                'name.alpha' => 'Имя должно состоять только из букв',
                'surname.required' => 'Поле обязательно для заполнения',
                'surname.alpha' => 'Фамилия должна состоять только из букв',
                'password.required' => 'Поле обязательно для заполнения',
                'confirm_password.required' => 'Поле обязательно для заполнения',
            ],
        );
        $userInfo = $request->all();
        $userCreate = User::create([
            'name' => $userInfo['name'],
            'surname' => $userInfo['surname'],
            'phone' => $userInfo['phone'],
            'email' => $userInfo['email'],
            'password' => Hash::make($userInfo['password']),
            'roles' => "1",
        ]);
        if ($userCreate) {
            Auth::login($userCreate);
            return redirect('/')->with('success', 'Вы зарегестрировались');
        } else {
            return redirect('/registration')->with('error', 'Ошибка регистрации');
        }
    }
    public function authorization()
    {
        return view('authorization');
    }
    public function authorization_validate(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ], [
            'email.required' => 'Поле обязательно для заполнения',
            'email.email' => 'Введите email правильно',
            'password.required' => 'Поле обязательно для заполнения',
        ]);

        $user_authorization = $request->only("email", "password");

        if (Auth::attempt(["email" => $user_authorization['email'], "password" => $user_authorization['password']])) {
            if (Auth::user()->role == 2) {
                return redirect('/moderator/index')->with('success', 'Вы вошли как Модератор');
            } else {
                return redirect('/')->with('success', 'Добро пожаловать');
            }
        } else {
            return redirect('/authorization')->with('error', 'Ошибка авторизации');
        }
    }
    public function sign_out()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
    public function presonaldata()
    {
        $activeAnimals = animal::where('status', '=', '2')->where('users', Auth::user()->id)->get();
        $moderationAnimals = animal::where('status', '=', '1')->where('users', Auth::user()->id)->get();
        return view('presonaldata', compact('activeAnimals', 'moderationAnimals'));
    }
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);

        $animal->animal_Photo()->delete();

        $animal->delete();

        return redirect()->back()->with('success', 'Объявление успешно удалено');
    }
    public function updatePhone(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:255',
        ]);

        Auth::user()->update([
            'phone' => $request->input('phone'),
        ]);

        return redirect()->back()->with('success', 'Номер телефона успешно изменен.');
    }

    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email|max:255',
        ]);

        Auth::user()->update([
            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('success', 'Email успешно изменен.');
    }

}
