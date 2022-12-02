<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\crudController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('home/', [homeController::class,'index']);

// Same Page Data
Route::get('form/', [crudController::class,'show']);

// Other Page Data
// Route::get('form/', [crudController::class,'index']);
Route::post('store', [crudController::class,'store']);
Route::get('show/', [crudController::class,'show']);

Route::get('edit/{id}', [crudController::class,'edit']);
Route::post('update/', [crudController::class,'update']);
Route::get('destroy/{id}', [crudController::class,'destroy']);

// Showing Data in other .
// Route::get('view/', [crudController::class,'show']);
