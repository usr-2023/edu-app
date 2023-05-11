<?php

use App\Http\Controllers\Basic\SchoolController;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'basic/school'], function() {

    //index
        Route::get('/',[SchoolController::class,'index'])->middleware(['auth','verified','permission:school-list'])->name('school.index');

    //create
        Route::get('/create',[SchoolController::class,'create'])->middleware(['auth','verified','permission:school-create'])->name('school.create');
        Route::post('/create', [SchoolController::class, 'store'])->middleware(['auth','verified','permission:school-create'])->name('school.store');

    //show
        Route::get('/show/{url_address}',[SchoolController::class,'show'])->middleware(['auth','verified','permission:school-show'])->name('school.show');
    
    //update
        Route::get('/edit/{url_address}',[SchoolController::class,'edit'])->middleware(['auth','verified','permission:school-update'])->name('school.edit');
        Route::patch('/update/{url_address}', [SchoolController::class, 'update'])->middleware(['auth','verified','permission:school-update'])->name('school.update'); 
 
     //delete

        Route::delete('/delete/{url_address}', [SchoolController::class, 'destroy'])->middleware(['auth','verified','permission:school-delete'])->name('school.destroy');
    
});