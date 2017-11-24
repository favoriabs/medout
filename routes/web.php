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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/patient/home', 'PatientController@index')->name('patient_index');
Route::get('/patient/create', 'PatientController@create')->name('create_patient_record');
Route::post('/patient/save', 'PatientController@store')->name('save_patient_record');
Route::get('/patient/edit/{id}', 'PatientController@edit')->name('edit_patient');
Route::post('/patient/update/{id}', 'PatientController@update')->name('update_patient_record');
Route::get('/patient/delete/{id}', 'PatientController@delete')->name('delete_patient');
