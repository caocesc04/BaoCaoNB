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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::match(['get', 'post'],'/','AdminController@login');

Route::group(['middleware' => ['adminlogin']],function(){
	Route::post('/editpl01', 'DanhMucPhuLuc01Controller@EditModal');
	Route::post('/deleteItem', 'DanhMucPhuLuc01Controller@deleteItem');

	Route::get('/dashboard','AdminController@dashboard');

	Route::resource('nhomthuoctinh','NhomThuocTinhController');
	Route::resource('danhmucphuluc01','DanhMucPhuLuc01Controller');
	Route::resource('danhmucphuluc04','DanhMucPhuLuc04Controller');
	Route::resource('baocaophuluc01','BaoCaoPhuLuc01Controller');
	Route::resource('kybaocao','DanhMucKyBaoCaoController');
	Route::resource('doanhnghiep','DoanhNghiepController');


	Route::get('/home', 'BaoCaoPhuLuc01Controller@index');
	Route::get('/danhmucphuluc01', 'DanhMucPhuLuc01Controller@index');
	Route::get('/danhmucphuluc04', 'DanhMucPhuLuc04Controller@index');
	Route::get('/baocaophuluc04', 'BaoCaoPhuLuc04Controller@index');
	Route::get('/kybaocao', 'DanhMucKyBaoCaoController@index');
	Route::get('/danhmucnhomthuoctinh', 'NhomThuocTinhController@index');
	Route::get('/doanhnghiep', 'DoanhNghiepController@index');

	Route::post('/editkybaocao', 'DanhMucKyBaoCaoController@editkbc');
	Route::post('/deletekybaocao', 'DanhMucKyBaoCaoController@deletekbc');
	Route::post('/editnhomthuoctinh', 'NhomThuocTinhController@editntt');
	Route::post('/deletenhomthuoctinh', 'NhomThuocTinhController@deletentt');
});

Auth::routes();


