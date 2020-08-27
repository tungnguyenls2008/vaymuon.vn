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
    return view('home');
});
Route::get('/home',"HomeController@index")->name('home');
Route::get('/lender', 'HomeController@forLender')->name('lender');
Route::get('/investor', 'HomeController@forInvestor')->name('investor');
Route::get('/payments', 'HomeController@payments')->name('payments');
Route::get('/promotion', 'HomeController@promotion')->name('promotion');

