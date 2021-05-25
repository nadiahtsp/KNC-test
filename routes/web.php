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

// Route::get('/', function () {
//     return view('company.index');
// });
Route::get('/', 'CompanyController@index')->name('index.company');

Route::get('/employee', 'EmployeeController@index')->name('index.employee');
Route::get('/employee/create', 'EmployeeController@create')->name('create.employee');
Route::post('/employee', 'EmployeeController@store')->name('store.employee');
Route::patch('/employee/{employee}', 'EmployeeController@update')->name('update.employee');
Route::get('/employee/{employee}/detail', 'EmployeeController@show')->name('show.employee');
Route::get('/employee/{employee}/edit', 'EmployeeController@edit')->name('edit.employee');
Route::delete('/employee/{employee}', 'EmployeeController@destroy')->name('destroy.employee');

Route::get('/company', 'CompanyController@index')->name('index.company');
Route::get('/company/create', 'CompanyController@create')->name('create.company');
Route::post('/company', 'CompanyController@store')->name('store.company');
Route::patch('/company/{company}', 'CompanyController@update')->name('update.company');
Route::get('/company/{company}/detail', 'CompanyController@show')->name('show.company');
Route::get('/company/{company}/edit', 'CompanyController@edit')->name('edit.company');
Route::delete('/company/{company}/delete', 'CompanyController@destroy')->name('destroy.company');

Route::get('/report', 'ReportController@index')->name('index.report');
