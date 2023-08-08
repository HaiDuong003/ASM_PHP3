<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiStudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::prefix('customer')->group(function (){
//    Route::get('/', [ApiCustomerController::class, 'index']); // lay ra danh sach
//    Route::post('/', [ApiCustomerController::class, 'store']); // Thêm
//    Route::get('/{id}', [ApiCustomerController::class, 'show']); // Hiển thị sửa
//    Route::put('/{id}', [ApiCustomerController::class, 'update']); // Sửa
//    Route::delete('/{id}', [ApiCustomerController::class, 'destroy']); // Xóa
//});

Route::prefix('students')->group(function () {
    Route::get('/', [ApiStudentController::class, 'index']); // lay ra danh sach
    Route::post('/', [ApiStudentController::class, 'store']); // Thêm
    Route::get('/{id}', [ApiStudentController::class, 'show']); // Hiển thị sửa
    Route::put('/{id}', [ApiStudentController::class, 'update']); // Sửa
    Route::delete('/{id}', [ApiStudentController::class, 'destroy']); // Xóa
});
