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


// Formats Routes
$formatRoutes = [
    'currency-true-format',
    'currency-false-format',
    'decimal-true-format',
    'decimal-false-format',
    'percent-true-format',
    'percent-false-format',
    'spellout-true-format',
    'spellout-false-format',
    'padding-true-format',
    'padding-false-format',
];

foreach ($formatRoutes as $route) {
    Route::view("/$route", "formats.$route");
}