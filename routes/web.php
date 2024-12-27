<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
// Auth::routes(['register'=> false]);

Route::middleware('auth')->group(function () {
    Route::get('/', [PageController::class, 'home']);
    Route::get('employees/get', [EmployeeController::class, 'getData'])->name('employees.data');
    Route::get('employee/edit', [EmployeeController::class, 'getData'])->name('employee.edit');
    Route::get('employee/destroy', [EmployeeController::class, 'getData'])->name('employee.destroy');
    Route::resource('employees', EmployeeController::class);
});
