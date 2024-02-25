<?php

use App\Http\Controllers\ModerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainController::class, "index"]);
Route::post('/sub', [MainController::class, "sub"]);
Route::post('/comments', [MainController::class, "comments"]);

Route::get('/registration', [UserController::class, "registration"]);
Route::get('/authorization', [UserController::class, "authorization"]);
Route::post('authorization_validate', [UserController::class, 'authorization_validate'])->name('authorization_validate');
Route::post('registration_validate', [UserController::class, 'registration_validate']);
Route::get('sign_out', [UserController::class, 'sign_out']);

Route::post('/addcard_validate', [MainController::class, "addcard_validate"]);

Route::get('/addcard',[MainController::class,'addcard']);
Route::get('/addcard',[MainController::class,'addcard']);

Route::get('/{id}/card',[MainController::class, 'card']);
Route::get('/search',[MainController::class, 'search']);

Route::get('/moderator/index',[ModerController::class, 'index']);
Route::post('/animals/{id}/change-status', [ModerController::class, 'changeStatus'])->name('change-status');
Route::get('/moderator/index',[ModerController::class, 'index'])->name('admin');

Route::get('/presonaldata', [UserController::class, "presonaldata"]);
