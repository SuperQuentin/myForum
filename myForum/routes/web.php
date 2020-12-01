<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\OpinionController;

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

Route::get('/', [ReferenceController::class, 'index']);
Route::resource('/references',ReferenceController::class);
Route::resource('/themes',ThemeController::class);
Route::resource('/roles',RoleController::class);
Route::resource('/states',StateController::class);
Route::resource('/opinions',OpinionController::class);