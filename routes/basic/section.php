<?php
use App\Http\Controllers\Basic\SectionController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'basic/section'], function() {

    //index
        Route::get('/',[SectionController::class,'index'])->middleware(['auth','verified','permission:section-list'])->name('section.index');

    //create
        Route::get('/create',[SectionController::class,'create'])->middleware(['auth','verified','permission:section-create'])->name('section.create');
        Route::post('/create', [SectionController::class, 'store'])->middleware(['auth','verified','permission:section-create'])->name('section.store');

    //show
        Route::get('/show/{url_address}',[SectionController::class,'show'])->middleware(['auth','verified','permission:section-show'])->name('section.show');
    
    //update
        Route::get('/edit/{url_address}',[SectionController::class,'edit'])->middleware(['auth','verified','permission:section-update'])->name('section.edit');
        Route::patch('/update/{url_address}', [SectionController::class, 'update'])->middleware(['auth','verified','permission:section-update'])->name('section.update'); 
 
     //delete

        Route::delete('/delete/{url_address}', [SectionController::class, 'destroy'])->middleware(['auth','verified','permission:section-delete'])->name('section.destroy');
    
});
