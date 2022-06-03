<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [MahasiswaController::class, "index"]);
Route::get("/create", [MahasiswaController::class, "create"]);
Route::post("/", [MahasiswaController::class, "store"]);
Route::view("/about", "about");
