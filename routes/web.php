<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; /*setando o caminho para a cotroller*/

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

Route::resource('/books', BookController::class); /*passando a rota atraves de um controller para mais segurança, e alterando a definição de rota para lavaravel 8*/
Route::delete('/books/delete/{id}', [BookController::class, 'destroy']);
