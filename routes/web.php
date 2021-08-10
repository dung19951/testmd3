<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('home')->group(function (){
    Route::get('/',[\App\Http\Controllers\AgencyController::class,'index'])->name('home.index');
    Route::get('/create',[\App\Http\Controllers\AgencyController::class,'create'])->name('home.create');
    Route::post('/create',[\App\Http\Controllers\AgencyController::class,'store'])->name('home.store');
    Route::get('/{id}/edit',[\App\Http\Controllers\AgencyController::class,'edit'])->name('home.edit');
    Route::get('/{id}/delete',[\App\Http\Controllers\AgencyController::class,'delete'])->name('home.delete');
    Route::get('/search',[\App\Http\Controllers\AgencyController::class,'search'])->name('home.search');
    Route::post('/{id}/edit',[\App\Http\Controllers\AgencyController::class,'update'])->name('home.update');
});
