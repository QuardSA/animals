<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModerController extends Controller
{
    public function index(){
        return view('moderator.index');
    }
}
