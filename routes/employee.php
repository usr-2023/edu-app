<?php
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'employee'], function() {
    //index
    Route::get('/',[EmployeeController::class,'index'])->middleware(['auth','verified'])->name('employee.index');
    //create
    Route::get('/create',[EmployeeController::class,'create'])->middleware(['auth','verified'])->name('employee.create');
    Route::post('/create', [EmployeeController::class, 'store'])->middleware(['auth','verified'])->name('employee.store');
    //show
    Route::get('/show/{url_address}',[EmployeeController::class,'show'])->middleware(['auth','verified'])->name('employee.show');
    //update
    Route::get('/edit/{url_address}',[EmployeeController::class,'edit'])->middleware(['auth','verified'])->name('employee.edit');
    Route::patch('/update/{url_address}', [EmployeeController::class, 'update'])->middleware(['auth','verified'])->name('employee.update');
    //delete
    Route::delete('/delete/{url_address}', [EmployeeController::class, 'destroy'])->middleware(['auth','verified'])->name('employee.destroy');
    
});
