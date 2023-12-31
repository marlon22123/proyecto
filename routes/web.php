<?php

use App\Http\Livewire\Manage\ServiceIndex;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/manage/service', ServiceIndex::class)->name('manage.service');
    Route::get('/prueba', function () {
        return view('prueba');
    })->name('prueba');
    Route::get('/prueba2', function () {
        return view('prueba2');
    })->name('prueba2');
});
