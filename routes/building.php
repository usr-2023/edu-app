<?php

use App\Http\Controllers\BuildingController;
use Illuminate\Support\Facades\Route;

Route::get('/building',[BuildingController::class,'index'])->middleware(['auth','verified'])->name('building.index');
Route::get('/building/create',[BuildingController::class,'create'])->middleware(['auth','verified'])->name('building.create');
Route::post('/building/create', [BuildingController::class, 'store'])->middleware(['auth','verified'])->name('building');

Route::get('/building/show/{url_address}',[BuildingController::class,'show'])->middleware(['auth','verified'])->name('building.show');

Route::get('/building/edit/{url_address}',[BuildingController::class,'edit'])->middleware(['auth','verified'])->name('building.edit');
Route::post('/building/update/{url_address}', [BuildingController::class, 'update'])->middleware(['auth','verified'])->name('building.update');
Route::post('/building/delete/{url_address}', [BuildingController::class, 'destroy'])->middleware(['auth','verified'])->name('building.destroy');
