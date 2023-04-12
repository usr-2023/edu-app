<?php

use App\Http\Controllers\BuildingController;
use Illuminate\Support\Facades\Route;

Route::get('/building',[BuildingController::class,'index'])->middleware(['auth','verified'])->name('building.index');
Route::get('/building/create',[BuildingController::class,'create'])->middleware(['auth','verified'])->name('building.create');
Route::post('/building/create', [BuildingController::class, 'store'])->middleware(['auth','verified'])->name('building');
