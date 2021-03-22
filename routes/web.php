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

Route::get('/', function(){
    return view('welcome');
});

Route::get('pelajaran1', function(){
	$my_string="Route::get('pelajaran1', function() {<BR>
				&nbsp&nbsp&nbsp&nbspreturn 'pelajaran1';<br>
				});";
	return $my_string;
});

Route::get('', function(){
	return view('pelajaran2');
});

Route::get('pelajaran_controller', 'DosenController@index');

Route::get('pelajaran_passing_data_controller_ke_view',
	'DosenController@passing_data_controller_ke_view');

Route::get('uri_page_url_domain/{uri_data}','DosenController@get_uri_data');

Route::get('formulir','DosenController@formulir');
Route::post('formulir/proses','DosenController@formulir_proses');

Route::get('home','BlogController@home');
Route::get('tentang','BlogController@tentang');
Route::get('kontak','BlogController@kontak');


Route::get('pegawai','PegawaiController@index');








