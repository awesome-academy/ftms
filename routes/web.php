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
//login
Route::get('/', [
    'as' => 'getLogin',
    'uses' => 'Login@index'
]);

Route::post('/', [
    'as' => 'postLogin',
    'uses' => 'Login@postLogin'
]);
//end login

Route::get('/logout', [
   'as' => 'logout',
   'uses' => 'Login@getLogout'
]);

Route::get('index',[
	'as'=>'getIndex',
	'uses'=>'Home@getIndex'
])->middleware('checkLogin');
]);

Route::get('memberProfile/{id}',[
	'as'=>'getMemberProfile',
	'uses'=>'Home@getMemberProfile'
]);

Route::get('subject/{id}',[
	'as'=>'getSubject',
	'uses'=>'Home@getSubject'
]);

Route::post('task/{id}',[
	'as'=>'postTask',
	'uses'=>'Home@postTask'
]);

Route::post('finish/{id}',[
	'as' => 'postFinish',
	'uses' => 'Home@postFinish'
]);

Route::get('myCalendar',[
	'as'=>'getMyCalendar',
	'uses'=>'Home@getMyCalendar'
]);
