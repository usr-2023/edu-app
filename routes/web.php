<?php

use App\Http\Controllers\NotificationController;
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

//basic group
Route::get('/basic/index', function () {
    return view('basic.index');
})->middleware(['auth', 'verified','permission:dashboard-info'])->name('basic.index');
//employee routes
require __DIR__.'/basic/employee.php';

//School routes
require __DIR__.'/basic/school.php';

//building routes
require __DIR__.'/basic/building.php';

//financial routes
require __DIR__.'/financial.php';

//profile routes
require __DIR__.'/profile.php';


});
//auth routes 
require __DIR__.'/auth.php';
