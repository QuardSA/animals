<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration()
    {
        return view('registartion');
    }
    public function authorization()
    {
        return view('authorization');
    }
}
