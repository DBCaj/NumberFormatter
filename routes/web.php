<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumberFormatterController;

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


Route::view('/', 'layouts.number-form')->name('number.form')->name('number.form');
Route::get('/num-format', [NumberFormatterController::class, 'numFormat'])->name('number.format');

////////////// Formats - Start ///////////////
Route::view('/currency-true-format', 'formats.currency-true-format');
Route::view('/currency-false-format', 'formats.currency-false-format');
Route::view('/decimal-true-format', 'formats.decimal-true-format');
Route::view('/decimal-false-format', 'formats.decimal-false-format');
Route::view('/percent-true-format', 'formats.percent-true-format');
Route::view('/percent-false-format', 'formats.percent-false-format');
Route::view('/spellout-true-format', 'formats.spellout-true-format');
Route::view('/spellout-false-format', 'formats.spellout-false-format');
Route::view('/padding-true-format', 'formats.padding-true-format');
Route::view('/padding-false-format', 'formats.padding-false-format');
////////////// Formats - End ///////////////