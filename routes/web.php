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

Route::get('logout', [
   'as' => 'logout',
   'uses' => 'Login@getLogout'
]);

Route::group(['middleware' => 'checkLogin'], function () {
    Route::get('index',[
        'as'=>'getIndex',
        'uses'=>'Home@getIndex'
    ]);
    Route::get('edit_profile', [
        'as' => 'edit_profile',
        'uses' => 'EditProfile@index',
    ]);
    Route::post('edit_profile', [
        'as' => 'post_edit_profile',
        'uses' => 'EditProfile@edit',
    ]);
    Route::get('change-password', [
        'as' => 'change_password',
        'uses' => 'EditProfile@getChangePassword'
    ]);
    Route::post('change-password', [
        'as' => 'post_change_password',
        'uses' => 'EditProfile@postChangePassword'
    ]);
    Route::get('activityCourse', [
        'as' => 'getActivityCourse',
        'uses' => 'History@getActivityCourse'
    ]);
    Route::get('myCurrent', [
        'as' => 'getMyCurrent',
        'uses' => 'History@getMyCurrent'
    ]);
});
