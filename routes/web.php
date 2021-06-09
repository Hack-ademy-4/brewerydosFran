<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BreweryController;
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

Route::get('/', [HomeController::class,"home"])->name("home");
Route::get('/contact',[HomeController::class,"contact"])->name("contact");
Route::post('/contact',[HomeController::class,"newContact"])->name("contact_new");
Route::get('/cervecerias',[BreweryController::class,"todas"])->name("cervecerias");
Route::get('/detalles',[BreweryController::class,"details"])->name("detalles");
