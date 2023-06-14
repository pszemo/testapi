<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Routing for cats
Route::get('cats', [CatController::class, 'index']);
Route::get('cats/{cat}', [CatController::class, 'show']);
Route::post('cats', [CatController::class, 'store']);
Route::put('cats/{cat}', [CatController::class, 'update']);
Route::delete('cats/{cat}', [CatController::class, 'delete']);

//Routing for Offices
Route::get('offices', [OfficeController::class, 'index']);
Route::get('offices/{office}',  [OfficeController::class, 'show']);
Route::post('offices',  [OfficeController::class, 'store']);
Route::put('offices/{office}',  [OfficeController::class, 'update']);
Route::delete('offices/{office}',  [OfficeController::class, 'delete']);
Route::get('offices/{office}/employees', [OfficeController::class,'showEmployees']);
Route::get('offices/{office}/cats', [OfficeController::class,'showCats']);

//Routing for employees
Route::get('employees', [EmployeeController::class, 'index']);
Route::get('employees/{employee}',  [EmployeeController::class, 'show']);
Route::post('employees',  [EmployeeController::class, 'store']);
Route::put('employees/{employee}',  [EmployeeController::class, 'update']);
Route::delete('employees/{employee}',  [EmployeeController::class, 'delete']);
Route::get('employees/{employee_id}/office',  [EmployeeController::class, 'showOffice']);
