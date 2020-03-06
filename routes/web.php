<?php

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


Route::get('/', 'myController@allStudents');

Route::get('view_student_form/', 'myController@viewStudentForm');

Route::post('insert_data/', 'myController@insertStudentData');

Route::get('delete_student/{id}', 'myController@deleteStudent');

Route::get('show_update/{id}', 'myController@showUpdate');

Route::post('updated/{id}', 'myController@update');