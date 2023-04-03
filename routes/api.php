<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    

});
Route::get('/events','App\Http\Controllers\EventController@index');
Route::post('/events','App\Http\Controllers\EventController@store');
Route::get('/events/{event}','App\Http\Controllers\EventController@show');
Route::put('/events/{event}','App\Http\Controllers\EventController@update');
Route::delete('/events/{event}','App\Http\Controllers\EventController@destroy');

Route::get('/recruiters','App\Http\Controllers\RecruiterController@index');
Route::post('/recruiters','App\Http\Controllers\RecruiterController@store');
Route::get('/recruiters/{recruiter}','App\Http\Controllers\RecruiterController@show');
Route::put('/recruiters/{recruiter}','App\Http\Controllers\RecruiterController@update');
Route::delete('/recruiters/{recruiter}','App\Http\Controllers\RecruiterController@destroy');

Route::get('/coders','App\Http\Controllers\CoderController@index');
Route::post('/coders','App\Http\Controllers\CoderController@store');
Route::get('/coders/{coder}','App\Http\Controllers\CoderController@show');
Route::put('/coders/{coder}','App\Http\Controllers\CoderController@update');
Route::delete('/coders/{coder}','App\Http\Controllers\CoderController@destroy');

Route::post('/matches/recruiters','App\Http\Controllers\RecruiterController@attach');
Route::post('/matches/recruiters/detach','App\Http\Controllers\RecruiterController@detach');

Route::post('/matches/coders','App\Http\Controllers\CoderController@recruiters');

Route::get('/companies','App\Http\Controllers\CompanyController@index');
Route::post('/companies','App\Http\Controllers\CompanyController@store');
Route::get('/companies/{company}','App\Http\Controllers\CompanyController@show');
Route::put('/companies/{company}','App\Http\Controllers\CompanyController@update');
Route::delete('/companies/{company}','App\Http\Controllers\CompanyController@destroy');

Route::get('/languages','App\Http\Controllers\LanguageController@index');
Route::post('/languages','App\Http\Controllers\LanguageController@store');
Route::get('/languages/{language}','App\Http\Controllers\LanguageController@show');
Route::put('/languages/{language}','App\Http\Controllers\LanguageController@update');
Route::delete('/languages/{language}','App\Http\Controllers\LanguageController@destroy');

Route::get('/promotions','App\Http\Controllers\PromotionsController@index');
Route::post('/promotions','App\Http\Controllers\PromotionsController@store');
Route::get('/promotions/{promotion}','App\Http\Controllers\PromotionsController@show');
Route::put('/promotions/{promotion}','App\Http\Controllers\PromotionsController@update');
Route::delete('/promotions/{promotion}','App\Http\Controllers\PromotionsController@destroy');

Route::get('/provinces','App\Http\Controllers\ProvincesController@index');
Route::post('/provinces','App\Http\Controllers\ProvincesController@store');
Route::get('/provinces/{province}','App\Http\Controllers\ProvincesController@show');
Route::put('/provinces/{province}','App\Http\Controllers\ProvincesController@update');
Route::delete('/provinces/{province}','App\Http\Controllers\ProvincesController@destroy');

Route::get('/regions','App\Http\Controllers\RegionsController@index');
Route::post('/regions','App\Http\Controllers\RegionsController@store');
Route::get('/regions/{region}','App\Http\Controllers\RegionsController@show');
Route::put('/regions/{region}','App\Http\Controllers\RegionsController@update');
Route::delete('/regions/{region}','App\Http\Controllers\RegionsController@destroy');

Route::get('/schools','App\Http\Controllers\SchoolsController@index');
Route::post('/schools','App\Http\Controllers\SchoolsController@store');
Route::get('/schools/{school}','App\Http\Controllers\SchoolsController@show');
Route::put('/schools/{school}','App\Http\Controllers\SchoolsController@update');
Route::delete('/schools/{school}','App\Http\Controllers\SchoolsController@destroy');

Route::get('/stacks','App\Http\Controllers\StackController@index');
Route::post('/stacks','App\Http\Controllers\StackController@store');
Route::get('/stacks/{stack}','App\Http\Controllers\StackController@show');
Route::put('/stacks/{stack}','App\Http\Controllers\StackController@update');
Route::delete('/stacks/{stack}','App\Http\Controllers\StackController@destroy');






