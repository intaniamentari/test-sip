<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Province;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmployeeController::class, 'index']);
Route::get('/create', [EmployeeController::class, 'create'])->name('create');
Route::post('/store', [EmployeeController::class, 'store'])->name('store');
Route::get('/getRegencies/{province_id}', [EmployeeController::class, 'getRegencies']);
Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
Route::post('/update', [EmployeeController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [EmployeeController::class, 'destroy'])->name('destroy');
