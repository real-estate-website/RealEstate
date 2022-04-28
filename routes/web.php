<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImmoController;
use App\Http\Controllers\Formulaire;

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

Route::get('/annonces', [ImmoController::class, 'annonces'])->middleware(['auth'])->name('annonces');

Route::get('/createannonce', [ImmoController::class, 'createannonce'])->middleware(['auth'])->name('createannonce');

Route::get('/contacts', [ImmoController::class, 'contacts'])->middleware(['auth'])->middleware(['auth'])->name('contacts');

Route::get('/favories', [ImmoController::class, 'favories'])->middleware(['auth'])->middleware(['auth'])->name('favories');

Route::get('/messages',[ImmoController::class, 'messages'] )->middleware(['auth'])->name('messages');

Route::post('/formulaire', [Formulaire::class, 'insert'])->middleware(['auth'])->name('formulaire');

require __DIR__.'/auth.php';
