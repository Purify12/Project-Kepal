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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('jadwal','DashboardController@jadwal')->name('jadwal');
Route::get('absen','Absen@absen')->name('absen');
Route::get('register','Register@regist') ->name('register');


Route::get('senin_IF', 'ContentController@senin')-> name('index');
Route::get('selasa_IF', 'ContentController@selasa');
Route::get('rabu_IF', 'ContentController@rabu');
Route::get('kamis_IF', 'ContentController@kamis');
Route::get('jumat_IF', 'ContentController@jumat');


Route::get('senin_TE', 'ContentController@seninte');
Route::get('selasa_TE', 'ContentController@selasate');
Route::get('rabu_TE', 'ContentController@rabute');
Route::get('kamis_TE', 'ContentController@kamiste');
Route::get('jumat_TE', 'ContentController@jumatte');


Route::get('senin_TB', 'ContentController@senintb');
Route::get('selasa_TB', 'ContentController@selasatb');
Route::get('rabu_TB', 'ContentController@rabutb');
Route::get('kamis_TB', 'ContentController@kamistb');
Route::get('jumat_TB', 'ContentController@jumattb');


Route::get('senin_SI','ContentController@seninsi');
Route::get('selasa_SI','ContentController@selasasi');
Route::get('rabu_SI','ContentController@rabusi');
Route::get('kamis_SI','ContentController@kamissi');
Route::get('jumat_SI','ContentController@jumatsi');

Route::get('senin_MR','ContentController@seninmr');
Route::get('selasa_MR','ContentController@selasamr');
Route::get('rabu_MR','ContentController@rabumr');
Route::get('kamis_MR','ContentController@kamismr');
Route::get('jumat_MR','ContentController@jumatmr');

Route::get('submit','SubmitController@index');
Route::get('back','SubmitController@back');
Route::get('create','SubmitController@create');
Route::post('insert', 'SubmitController@insert');
Route::get('delete/{id}','SubmitController@delete');
Route::get('edit/{id}','SubmitController@edit');
Route::post('update/{id}', 'SubmitController@update');
Route::get('read/{id}','SubmitController@read');