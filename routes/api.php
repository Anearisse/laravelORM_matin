<?php

use Illuminate\Http\Request;

use app\Http\Controller\Api\Employee;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('employees', 'EmployeeController');
Route::apiResource('departments', 'DepartmentApiController');
Route::apiRessource('titles', 'TitleController');
Route::apiRessource('Department', 'DepartmentController');