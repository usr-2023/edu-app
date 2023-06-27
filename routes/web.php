<?php

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
Route::group(['middleware' => 'checkStatus'], function () {
   
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//user routes
require __DIR__.'/user.php';

//role routes
require __DIR__.'/role.php';

//notification routes
require __DIR__.'/notification.php';

//********************************basic info group*************************************
Route::get('/basic/index', function () {
    return view('basic.index');
})->middleware(['auth', 'verified','permission:dashboard-info'])->name('basic.index');
//basic info employee routes
require __DIR__.'/basic/employee.php';

//basic info School routes
require __DIR__.'/basic/school.php';

//basic info building routes
require __DIR__.'/basic/building.php';




//********************************basic info group*************************************
Route::get('/financial/index', function () {
    return view('financial.index');
})->middleware(['auth', 'verified','permission:dashboard-financial'])->name('financial.index');
//financial routes
require __DIR__.'/financial/financial.php';

//financial_organizer routes
require __DIR__.'/financial/financial_accountant.php';



//profile routes
require __DIR__.'/profile.php';


});
//auth routes 
require __DIR__.'/auth.php';
