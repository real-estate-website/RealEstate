<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImmoController;
use App\Http\Controllers\Formulaire;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/annonces', [ImmoController::class, 'annonces'])->middleware(['auth'])->name('annonces');

Route::get('/createannonce', [ImmoController::class, 'createannonce'])->middleware(['auth'])->name('createannonce');

Route::get('/contacts', [ImmoController::class, 'contacts'])->middleware(['auth'])->middleware(['auth'])->name('contacts');

Route::get('/favories', [ImmoController::class, 'favories'])->middleware(['auth'])->middleware(['auth'])->name('favories');

Route::get('/messages',[ImmoController::class, 'messages'] )->middleware(['auth'])->name('messages');

Route::post('/formulaire', [Formulaire::class, 'insert'])->middleware(['auth'])->name('formulaire');

Route::get('login/github', [AuthenticatedSessionController::class, 'redirectToProvider']);

Route::get('login/github/callback', [AuthenticatedSessionController::class, 'handleProviderCallback']);

require __DIR__.'/auth.php';
