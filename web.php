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
    return view('main');
});


// Geting DropDown List Data
Route::get('/new_user', 'country_state_city@getcountry');
Route::get('getstate/{countrycode}', 'country_state_city@getstate');
Route::get('getcity/{stateId}', 'country_state_city@getcity');

// Insert User Database
Route::post('/submit-user-data', 'NewUserController@add_new_user');



Route::get('createcaptcha', 'CaptchaController@create');
Route::post('myCaptcha.post', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');
