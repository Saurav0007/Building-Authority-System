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

Route::get('/home',"employee@employee");
Route::get('/public',"publicindex@public");
Route::get('/worker',"worker@worker");

//worker

Route::get('/Feedback',"worker@Feedback");
Route::get('/office',"worker@office");
Route::get('/Presence',"worker@presence");
Route::get('/Report',"worker@Report");
Route::get('/shop',"worker@shop");
// Worker main Function
Route::post('/SubmitReport',"WokerReportController@WorkerReport");

// public
Route::get('PublicPresence',"publicindex@Public_presence");
Route::get('Publicshop',"publicindex@public_shop");
Route::get('Publicoffice',"publicindex@public_office");
Route::get('askpermission',"publicindex@askpermission");
Route::get('takepermission',"publicindex@takepermission");
Route::get('PublicReport',"publicindex@public_report");
Route::get("PublicFeedback","publicindex@public_feedback");
// public Main function
Route::post('SubmitPublicReport',"PublicReportController@PublicReport");
