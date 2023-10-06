<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/register', function () {
    return view('auth.register');
})->middleware(['auth'])->name('register');



Route::get('/userLogin', function () {
    return view('site.login2');
})->name('userLogin');

Route::get('/cadastro', function () {
    return view('site.cadastro');
});



Route::get('/home', function () {
    return view('site.home');
})->name('home');

Route::get('/contato', function () {
    return view('site.contato');
})->name('contato');

Route::get('/sobre', function () {
    return view('site.sobre');
})->name('sobre');

Route::get('/comunidade', function () {
    return view('site.comunidade');
})->name('comunidade');


require __DIR__.'/auth.php';
