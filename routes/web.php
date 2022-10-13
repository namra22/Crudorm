<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\controllerCategory;

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

Route::get('/', [controllerCategory::class,'index']);
Route::get('/category-create', [controllerCategory::class,'create']);
Route::post('/category-store', [controllerCategory::class,'store']);
Route::get('/category-edit/{id}', [controllerCategory::class,'edit']);
Route::put('/category-update/{id}', [controllerCategory::class,'update']);
Route::get('/category-delete/{id}', [controllerCategory::class,'delete']);
