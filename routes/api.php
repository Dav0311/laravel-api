<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("/getemployees",[EmployeeController::class,'get_all_employees']);

Route::post("/create",[EmployeeController::class,'create_employee']);

Route::delete("/delete/{id}",[EmployeeController::class,'delete_employee']);