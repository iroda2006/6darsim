<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});


Route:: get(uri: '/users', action: [UserController:: class, 'index'] );
Route::get(uri: '/users/create', action: [UserController::class , 'create'])->name(name: 'users.create');
Route::post(uri: '/users', action: [UserController::class, 'store' ]) ->name(name: 'users.store');

