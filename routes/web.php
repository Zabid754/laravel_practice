<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/users',[UserController::class,'users']);
//Route::view('users','users');
Route::get('/students',[StudentController::class,'getStudents']);