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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[
    'as'=>'trangchu',
    'uses'=>'PageController@getIndex'
]);
Route::get('loai-san-pham/{type}',[
        'as'=>'loaisanpham',
    'uses'=>'PageController@getLoaiSp'
 ]);
 Route::get('chi-tiet-san-pham/{id}',[
    'as'=>'chitietsanpham',
   'uses'=>'PageController@getChitiet'
]);
Route::get('lien-he',[
    'as'=>'lienhe',
   'uses'=>'PageController@getLienhe'
]);
Route::get('gioi-thieu',[
    'as'=>'gioithieu',
   'uses'=>'PageController@getGioithieu'
]);
Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
   'uses'=>'PageController@getAddtoCart'
]);
Route::get('mua-hang',[
    'as'=>'muahang',
   'uses'=>'PageController@getMuahang'
]);




Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'UsersController@index');
    Route::resource('/bills', 'BillsController');
    Route::resource('/products', 'ProductsController');
    Route::resource('/productsType', 'ProductsTypeController');
    Route::resource('/slides', 'SlidesController');
    Route::resource('/customer', 'CustomerController');
    Route::resource('/news', 'NewsController');
    Route::resource('/users','UsersController');
});


//facebook -------------
Route::get('login/facebook', 'Auth\LoginController@f_redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@f_handleProviderCallback')->name('login.facebook.callback');
//google--------------
Route::get('login/google', 'Auth\LoginController@g_redirectToProvider')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@g_handleProviderCallback')->name('login.google.callback');
//---------------------
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
// <head>
//     <meta charset="utf-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1">

//     <!-- CSRF Token -->
//     <meta name="csrf-token" content="{{ csrf_token() }}">

//     <title>{{ config('app.name', 'Laravel') }}</title>

//     <!-- Scripts -->
//     <script src="{{ asset('js/app.js') }}" defer></script>

//     <!-- Fonts -->
//     <link rel="dns-prefetch" href="//fonts.gstatic.com">
//     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

//     <!-- Styles -->
//     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
// </head>