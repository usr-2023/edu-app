

<?php
use App\Http\Controllers\BuildingController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'building'], function() {
    //index
    Route::get('/',[BuildingController::class,'index'])->middleware(['auth','verified'])->name('building.index');
    //create
    Route::get('/create',[BuildingController::class,'create'])->middleware(['auth','verified'])->name('building.create');
    Route::post('/create', [BuildingController::class, 'store'])->middleware(['auth','verified'])->name('building.store');
    //show
    Route::get('/show/{url_address}',[BuildingController::class,'show'])->middleware(['auth','verified'])->name('building.show');
    //update
    Route::get('/edit/{url_address}',[BuildingController::class,'edit'])->middleware(['auth','verified'])->name('building.edit');
    Route::patch('/update/{url_address}', [BuildingController::class, 'update'])->middleware(['auth','verified'])->name('building.update');
    //delete
    Route::delete('/delete/{url_address}', [BuildingController::class, 'destroy'])->middleware(['auth','verified'])->name('building.destroy');
    
});

