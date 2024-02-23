<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function addcard()
    {
        return view('addcard');
    }

    public function card(){
        return view('card');
    }

    public function search(){
        return view('search');
    }
}
