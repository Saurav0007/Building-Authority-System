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

Route::get('/public',"PublicHomeController@public");
Route::get('/worker',"WorkerController@worker");
Route::get('/Employee',"EmployeeController@employee");
Route::get('/admin',"AdminController@admin");

//Admin

Route::get('/Details',"AdminController@Details");
Route::get('/Report',"AdminController@Report");
Route::get('/Account',"AdminController@Account");
Route::get('/Shop_office',"AdminController@Shop_office");
Route::get('/RoomDetails',"AdminController@RoomDetails");
Route::get('/LogOut',"AdminController@LogOut");
// admin main function
Route::post('/SubmitAccountAdmin',"AdminController@AccountAdmin");
Route::post('/SubmitShopOfficeAdmin',"AdminController@ShopOfficeAdmin");

//worker

Route::get('/WorkerFeedback',"WorkerController@Feedback");
Route::get('/Workeroffice',"WorkerController@office");
Route::get('/WorkerPresence',"WorkerController@presence");
Route::get('/WorkerReport',"WorkerController@Report");
Route::get('/Workershop',"WorkerController@shop");
// Worker main Function
Route::post('/WorkerSubmitReport',"WokerReportController@WorkerReport");

// public
Route::get('PublicPresence',"PublicHomeController@Public_presence");
Route::get('Publicshop',"PublicHomeController@public_shop");
Route::get('Publicoffice',"PublicHomeController@public_office");
Route::get('askpermission',"PublicHomeController@askpermission");
Route::get('takepermission',"PublicHomeController@takepermission");
Route::get('PublicReport',"PublicHomeController@public_report");
Route::get("PublicFeedback","PublicHomeController@public_feedback");
// public Main function
Route::post('SubmitPublicReport',"PublicReportController@PublicReport");

// Employee
Route::get("/permission_details","EmployeeController@permission_details");
Route::get("/permission_list","EmployeeController@permission_list");
Route::get("/public_details","EmployeeController@public_details");
Route::get("/public_regi","EmployeeController@public_regi");
Route::get("/EmployeeRoomDetails","EmployeeController@RoomDetails");
Route::get("/EmptyRoomDetails","EmployeeController@EmptyRoomDetails");
Route::get("/shop_office","EmployeeController@shop_office");
Route::get("/worker_regi","EmployeeController@worker_regi");
Route::get("/worker_details","EmployeeController@worker_details");
// Employee Function
Route::post('/WorkerAccountDetails',"EmployeeController@WorkerRegi");
Route::post('/PublicAccountDetails',"EmployeeController@PublicRegi");
Route::post('/SubmitRoom','EmployeeController@EmptyRoom');

