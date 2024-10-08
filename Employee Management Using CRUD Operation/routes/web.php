<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeeController::class,'index'])->name('index');
Route::get('/add',[EmployeeController::class,'create'])->name('create');
Route::post('/add',[EmployeeController::class,'store'])->name("store");
Route::post('/delete/{id}',[EmployeeController::class,'destroy'])->name("destroy");

