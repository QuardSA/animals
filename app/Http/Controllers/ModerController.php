<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\animal;

class ModerController extends Controller
{
    public function index(Request $request)
    {
        $sortField = $request->get('sort_field', 'status');
        $sortOrder = $request->get('sort_order', 'desc');
        $sortFiel = $request->get('sort_fiel', 'created_at');
        $sortOrde = $request->get('sort_orde', 'desc');

        $animals = Animal::orderBy($sortField, $sortOrder)
                          ->orderBy($sortFiel, $sortOrde)
                          ->get();

        return view('moderator.index', [
            'animals' => $animals,
            'sortField' => $sortField,
            'sortOrder' => $sortOrder,
            'sortFiel' => $sortFiel,
            'sortOrde' => $sortOrde,
        ]);
    }

    public function changeStatus(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);

        $animal->update(['status' => $request->input('status')]);

        return redirect()->back()->with('success', 'Статус успешно изменен');
    }
}
