<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//employee routes
Route::get('/employee',[EmployeeController::class,'index'])->middleware(['auth','verified'])->name('employee.index');
Route::get('/employee/create',[EmployeeController::class,'create'])->middleware(['auth','verified'])->name('employee.create');
Route::post('/employee/create', [EmployeeController::class, 'store'])->middleware(['auth','verified'])->name('employee');

Route::get('/employee/show/{url_address}',[EmployeeController::class,'show'])->middleware(['auth','verified'])->name('employee.show');

Route::get('/employee/edit/{url_address}',[EmployeeController::class,'edit'])->middleware(['auth','verified'])->name('employee.edit');
Route::post('/employee/update/{url_address}', [EmployeeController::class, 'update'])->middleware(['auth','verified'])->name('employee.update');
Route::post('/employee/delete/{url_address}', [EmployeeController::class, 'destroy'])->middleware(['auth','verified'])->name('employee.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
