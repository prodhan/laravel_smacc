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


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'HomePageController@index');

Route::get('/pricing', 'PriceListController@index');
Route::get('/order/{id}', 'OrderNowController@index');
Route::post('/order', 'OrderNowController@store');


Auth::routes();






Route::get('/home', 'HomePageController@index');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware'=>'auth'],function(){

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
       return view('admin.dashboard');
    });
Route::resource('/footermenu', 'FooterMenuController');
Route::resource('/slider', 'SliderController');
Route::resource('/clientslider', 'ClientSliderController');
Route::resource('/pricelist', 'PricingControler');
   
});


});


