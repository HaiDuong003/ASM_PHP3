<?php

use App\Http\Controllers\StudentController;
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
Route::get('/list_students', [StudentController::class, 'list'])->name('list');
Route::post('/list_students', [StudentController::class, 'list'])->name('search-student');
Route::match(['GET', 'POST'], '/add_student', [StudentController::class, 'add'])->name('add-student');
Route::match(['GET', 'POST'], '/edit_student/{id}', [StudentController::class, 'edit'])->name('edit-student');
Route::get('/delete/student/{id}', [StudentController::class, 'delete']);
