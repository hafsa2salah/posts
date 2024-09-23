z<?php

use App\Http\Controllers\Controller;
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



Route::get('/posts', [Controller::class, 'index']);

Route::get('/posts/create', [Controller::class, 'create']);
Route::post('/posts', [Controller::class, 'store']);
Route::get('/posts/{id}/edit', [Controller::class, 'edit']);
Route::put('/posts/{id}', [Controller::class, 'update']);
Route::delete('/posts/{id}', [Controller::class, 'destroy']);
