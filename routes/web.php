<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;

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

// Show All Notes
Route::get('/', [NoteController::class, 'index'])->middleware('auth');

// Show Notes Creation Form
Route::get('/notes/create', [NoteController::class, 'create'])->middleware('auth');

// Store Notes
Route::post('/notes', [NoteController::class, 'store'])->middleware('auth');

// Show Edit Page
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->middleware('auth');

// Update Notes
Route::put("/notes/{note}", [NoteController::class, 'update'])->middleware('auth');

// Delete notes
Route::delete('/notes/{note}', [NoteController::class, 'delete'])->middleware('auth');

// Show Manage Notes
Route::get('/notes/manage', [NoteController::class, 'manage'])->middleware('auth');

// Show Single Listings
Route::get('/notes/{note}', [NoteController::class, 'show'])->middleware('auth');


// Show User Register
Route::get('/users/register', [UserController::class, 'register']);

// Post User Register
Route::post('/users', [UserController::class, 'store']);

// Show User Login Page
Route::get('/users/login', [UserController::class, 'login'])->name('login');

// User Authenticate
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// User Logout
Route::post('/users/logout', [UserController::class, 'delete'])->middleware('auth') ;




