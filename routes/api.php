<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('auth')->group(function(){
  
   Route::post('/register','App\Http\Controllers\AuthController@register');
   Route::post('/login','App\Http\Controllers\AuthController@login');
   Route::get('/logout','App\Http\Controllers\AuthController@logout')->middleware('auth:api');
   Route::get('/user','App\Http\Controllers\AuthController@user')->middleware('auth:api');
   Route::get('authentication_failed','App\Http\Controllers\AuthController@authFailed')->name('auth-failed');


});


//Api Resources

Route::Group(['prefix'=>'Lockups' , 'middleware' => 'auth:api' ],function(){

 Route::resource('category','App\Http\Controllers\CategoryController');
 Route::resource('country','App\Http\Controllers\CountryController');

});



Route::resource('opportunities','App\Http\Controllers\OpportunityController');


Route::group(['namespace'=>'App\Http\Controllers','middleware'=>'auth:api'], function (){

    //Opportunities
   Route::resource('opportunity','OpportunityController');

    // Questions
    Route::get('questions','QuestionController@index');
    Route::post('question','QuestionController@store');
    Route::put('question/{question}','QuestionController@update');

    // Favorites
   Route::get('favorites','FavoriteController@index');
   Route::post('favorite','FavoriteController@store');
   Route::put('favorite/{favorite}','FavoriteController@update');

   // ToDo: Upload Images for Opportunities and Forum
});

