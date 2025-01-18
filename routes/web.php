<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CobaController;


// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/form', function () {
//     return view('form');
// });
// Route::get('/welcome', function () {
//     return view('welcome');
// });

route::get('/', [CobaController::class,'satu']);
route::get('/formm', [CobaController::class,'dua']);
route::get('/welcome', [CobaController::class,'tiga']);
route::get('/form', [CobaController::class,'form']);