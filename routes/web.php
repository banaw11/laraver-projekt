<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\KeysController;
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
    return view('welcome');
});

Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeesController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeesController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}/edit', [EmployeesController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}/update', [EmployeesController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}/delete', [EmployeesController::class, 'delete'])->name('employees.delete');

Route::get('/keys', [KeysController::class, 'index'])->name('keys.index');
Route::get('/keys/create', [KeysController::class, 'create'])->name('keys.create');
Route::post('/keys', [KeysController::class, 'store'])->name('keys.store');
Route::get('/keys/{key}/edit', [KeysController::class, 'edit'])->name('keys.edit');
Route::put('/keys/{key}/update', [KeysController::class, 'update'])->name('keys.update');
Route::delete('/keys/{key}/delete', [KeysController::class, 'delete'])->name('keys.delete');