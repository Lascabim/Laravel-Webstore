<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/', [ProductsController::class, 'mainPage'])->name('welcome');
Route::get('/welcome', [ProductsController::class, 'mainPage'])->name('welcome');

Route::get('/sobre', [ProductsController::class, 'aboutPage'])->name('sobre');

Route::get('/loja', [ProductsController::class, 'storePage'])->name('loja');
Route::get('/loja/{id}', [ProductsController::class, 'storePageS'])->name('lojaSearch');