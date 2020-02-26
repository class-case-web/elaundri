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

Route::get('send-email','SampleEmailController@testSendEmail');

Route::get('/', function () {
    return view('admin/add_type_laundry');
});

Route::get('send-email','SampleEmailController@testSendEmail');

Route::get('admin/customer','AdminCustomerController@getIndex');
Route::get('admin/add_customer','AdminCustomerController@getAdd');
Route::post('admin/save_customer','AdminCustomerController@getSave');

Route::get('add_transaksi','AdminTransaksiController@getAdd');
Route::post('transaksi_save','AdminTransaksiController@getSave');   

Route::get('admin/type_laundry','AdminTypeLaundryController@getIndex');
Route::get('admin/add_type_laundry','AdminTypeLaundryController@getAdd');
Route::post('admin/save_type_laundry','AdminTypeLaundryController@getSave');
