<?php

use App\Http\Controllers\test;
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

Route::get('/', [test::class,'index'])->name('home');

Route::post('/',[test::class,'tambah']);

Route::delete('/hapus/{task}', [test::class, 'hapus'])->name('hapus');


