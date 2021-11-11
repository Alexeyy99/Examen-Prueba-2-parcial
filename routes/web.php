<?php

use App\Http\Livewire\Libros\CreateLibros;
use App\Http\Livewire\Libros\IndexLibro;
use Illuminate\Support\Facades\Route;

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

Route::get('/libros', IndexLibro::class)->name('libros.index');

Route::get('/libros/crear', CreateLibros::class)->name('libros.create');
