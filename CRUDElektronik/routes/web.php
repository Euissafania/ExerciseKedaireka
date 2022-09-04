<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ElektronikController;
use App\Http\Controllers\ElektronikTypeController;


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

// Route::middleware("auth")->group(function(){
//     Route::get("/", [ItemController::class, "index"]);
//     Route::get("/create", [ItemController::class, "create"])->name("create");
//     Route::post("/store", [ItemController::class, "store"])->name("store");
//     Route::get("/edit/{id}", [ItemController::class, "edit"])->name("edit");
//     Route::post('/update/{id}', [ItemController::class,'update'])->name('update');
//     Route::delete('/destroy/{id}', [ItemController::class,'destroy'])->name('destroy');
    
//     Route::get("/item-types", [ItemTypeController::class, "index"]);
//     Route::get("/create-types", [ItemController::class, "create"])->name("create");
// });

Route::get("/", [ElektronikController::class, "index"]);
    Route::get("/create_barang", [ElektronikController::class, "create"])->name("create_barang");
    Route::post("/store", [ElektronikController::class, "store"])->name("store");
    Route::get("/edit_barang/{id}", [ElektronikController::class, "edit"])->name("edit_barang");
    Route::post('/update_barang/{id}', [ElektronikController::class,'update'])->name('update_barang');
    Route::delete('/destroy_barang/{id}', [ElektronikController::class,'destroy'])->name('destroy_barang');
    
    Route::get("/index_type", [ElektronikTypeController::class, "index_type"]);
    Route::get("/create_type", [ElektronikTypeController::class, "create"])->name("create_type");
    Route::post("/store_type", [ElektronikTypeController::class, "store_type"])->name("store_type");
    Route::get("/edit/{id}", [ElektronikTypeController::class, "edit"])->name("edit");
    Route::post('/update/{id}', [ElektronikTypeController::class,'update'])->name('update');
    Route::delete('/destroy/{id}', [ElektronikTypeController::class,'destroy'])->name('destroy');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
