<?php

use Illuminate\Support\Facades\Route;
use App\Models\Career;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $careers = Career::all();
    return view('register', compact('careers'));
});

Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store']);