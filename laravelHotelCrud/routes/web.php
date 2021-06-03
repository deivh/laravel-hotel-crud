<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@indexView') -> name('indexLink');
Route::get('/employee/{id}', 'MainController@employeeView') -> name('employeeLink');

Route::get('/edit/employee/{id}', 'MainController@editEmployeeView') -> name('editEmployeeLink');
Route::post('/update/employee/{id}', 'MainController@updateEmployee') -> name('updateEmployeeLink');

Route::get('/delete/employee/{id}', 'MainController@deleteEmployee') -> name('deleteEmployeeLink');
