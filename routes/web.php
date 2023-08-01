<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HelloController;

use App\Http\Controllers\HomeController;


use App\Http\Controllers\AboutController;


use App\Http\Controllers\useContactController;

use App\Http\Controllers\CrudController;

use App\Http\Controllers\CrudViewController;

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


///Route::get('/','App/Http/Controllers/HelloController@hello');

///Route::get('/', [HelloController::class, 'hello']);


Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'index']);

Route::get('/contact', [ContactController::class,'index']);


Route::Resource('/crud',CrudController::class);

Route::Resource('/crud_view',CrudViewController::class);