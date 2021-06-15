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
//todas la cerveceria
Route::get('/cervecerias',[BreweryController::class,"todas"])->name("cervecerias");
//crear nueva cerveceria
Route::get('/newCerveceria',[BreweryController::class,"newCerveceria"])->name("newCerveceria");
Route::post('/create',[BreweryController::class,"create"])->name("create");

// detalle cerveceria
Route::get('/breweries/{id}',[BreweryController::class,'show'])->name("breweries.show");

// editar una cerveceria
Route::get('/breweries/{id}/edit',[BreweryController::class,'edit'])->name("breweries.edit");
Route::put('/breweries/{id}',[BreweryController::class,'update'])->name("breweries.update");

// eliminar una cerveceria
Route::delete('/breweries/{id}',[BreweryController::class,'destroy'])->name("breweries.destroy");
