<?php

use App\Http\Controllers\FinancialController;
use Illuminate\Support\Facades\Route;



Route::get('/financial',[FinancialController::class,'index'])->middleware(['auth','verified'])->name('financial.index');
Route::get('/financial/add_payroll',[FinancialController::class,'add_payroll'])->middleware(['auth','verified'])->name('financial.add_payroll');
Route::post('/financial/add_payroll', [FinancialController::class, 'store'])->middleware(['auth','verified'])->name('financial.add_payroll');