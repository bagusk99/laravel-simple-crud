<?php

use App\Http\Controllers\ExampleController;
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
    // return view('welcome');
    return redirect()->route('example.index');
});

/**
 * Route::resource berfungsi untuk otomatis men-generate route yang dibutuhkan untuk CRUD
 * check routing yang tersedia dengan menjalankan perintah "php artisan route:list"
 */
Route::resource('example', ExampleController::class)->except(['destroy']);
Route::get('example/{example}/delete', [ExampleController::class, 'destroy'])->name('example.destroy');
