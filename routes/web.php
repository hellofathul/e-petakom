<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
use Illuminate\Support\Facades\Auth;

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

Route::redirect('/dhiya', '/');

Route::view('/pelajar', 'pelajar',
    ['nama' => 'dhiya']);

Route::get('/kelas', function(){
    return view('go');
});

Route::post('/kelas', function(){
    echo "<h1>POST --  Kelas Programming</h1>";
});

Route::get('/cec', function(){
    return view('electioncommittee/ce-committee');
});

Route::get('/ces', function(){
    return view('electioncommittee/ce-student');
});

Route::get('/ceo', function(){
    return view('electioncommittee/ce-coordinator');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
