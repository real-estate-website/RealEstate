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


/* Annonces */
Route::get('/annonces', [ImmoController::class, 'annonces'])->middleware(['auth'])->name('annonces');

Route::get('/annoncesdetails/{id}', [ImmoController::class, 'annoncesdetails'])->middleware(['auth'])->name('annoncesdetails');

Route::get('/annoncemodifyform/{id}', [ImmoController::class, 'annoncemodifyform'])->middleware(['auth'])->name('annoncemodifyform');

Route::post('/annoncemodify', [ImmoController::class, 'annoncemodify'])->middleware(['auth'])->name('annoncemodify');

Route::get('/annoncedelete/{id}', [ImmoController::class, 'annoncedelete'])->middleware(['auth'])->name('annoncedelete');

Route::get('/createannonce', [ImmoController::class, 'createannonce'])->middleware(['auth'])->name('createannonce');
/* Annonces */

/* favorie */

Route::get('/favories', [ImmoController::class, 'favories'])->middleware(['auth'])->middleware(['auth'])->name('favories');

Route::get('/favoriedetails/{id}', [ImmoController::class, 'favoriedetails'])->middleware(['auth'])->name('favoriedetails');

Route::get('/favoriemodifyform/{id}', [ImmoController::class, 'favoriemodifyform'])->middleware(['auth'])->name('favoriemodifyform');

Route::post('/favoriemodify', [ImmoController::class, 'favoriemodify'])->middleware(['auth'])->name('favoriemodify');

Route::get('/favoriedelete/{id}', [ImmoController::class, 'favoriedelete'])->middleware(['auth'])->name('favoriedelete');

/* favorie */

/* Message */
Route::get('/messages',[ImmoController::class, 'messages'] )->middleware(['auth'])->name('messages');

Route::post('/formulaire', [Formulaire::class, 'insert'])->middleware(['auth'])->name('formulaire');

Route::get('/messagemodifyform/{id}',[ImmoController::class, 'messagemodifyform'] )->middleware(['auth'])->name('messagemodifyform');

Route::post('/messagemodify', [ImmoController::class, 'messagemodify'])->middleware(['auth'])->name('messagemodify');

Route::get('/messagedelete/{id}', [ImmoController::class, 'messagedelete'])->middleware(['auth'])->name('messagedelete');

/* Message */

/* Git */

Route::get('login/github', [AuthenticatedSessionController::class, 'redirectToProvider']);

Route::get('login/github/callback', [AuthenticatedSessionController::class, 'handleProviderCallback']);

/* Git */
require __DIR__.'/auth.php';
