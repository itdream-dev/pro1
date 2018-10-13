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
Route::get('locale/{lang}', ['as'=>'lang.switch', 'uses'=>'LangController@switchLang']);

Route::get('/', 'HomeController@index')->name('index');
Route::get('/login_help', 'LoginHelpController@login_help')->name('login_help');
Route::post('/readschool', 'SchoolController@schools')->name('schools');
Route::post('/getCountries', 'Auth\RegisterController@getCountries')->name('countries');
Route::post('/getStates', 'Auth\RegisterController@getStates')->name('states');
Route::post('/getCites', 'Auth\RegisterController@getCites')->name('cites');

Route::group(['middleware' => ['auth']], function () {
  Route::get('/dashboard', 'HomeController@home')->name('home');
  Route::get('/home', 'HomeController@home')->name('home');
  Route::get('/wallet', 'WalletController@wallet')->name('wallet');
  Route::get('/security_center', 'SecurityController@security_center')->name('security_center');
  Route::get('/settings', 'SettingController@settings')->name('settings');
  Route::get('/faq', 'HelpController@faq')->name('faq');
  Route::post('/postSend', 'WalletController@postSend')->name('postSend');
});
