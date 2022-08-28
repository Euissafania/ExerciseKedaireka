<?php

use App\Http\Controllers\ElektronikController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[ElektronikController::class,"index"]);
Route::get("/create",[ElektronikController::class,"create"])->name("create");
Route::post("/store", [ElektronikController::class, "store"])->name("store");
Route::get("/edit/{id}", [ElektronikController::class, "edit"])->name("edit");
Route::post("/update/{id}", [ElektronikController::class,"update"])->name("update");
Route::delete("/destroy/{id}", [ElektronikController::class,"destroy"])->name("destroy");