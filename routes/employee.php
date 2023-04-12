<?php
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;



Route::get('/employee',[EmployeeController::class,'index'])->middleware(['auth','verified'])->name('employee.index');
Route::get('/employee/create',[EmployeeController::class,'create'])->middleware(['auth','verified'])->name('employee.create');
Route::post('/employee/create', [EmployeeController::class, 'store'])->middleware(['auth','verified'])->name('employee');

Route::get('/employee/show/{url_address}',[EmployeeController::class,'show'])->middleware(['auth','verified'])->name('employee.show');

Route::get('/employee/edit/{url_address}',[EmployeeController::class,'edit'])->middleware(['auth','verified'])->name('employee.edit');
Route::post('/employee/update/{url_address}', [EmployeeController::class, 'update'])->middleware(['auth','verified'])->name('employee.update');
Route::post('/employee/delete/{url_address}', [EmployeeController::class, 'destroy'])->middleware(['auth','verified'])->name('employee.destroy');
