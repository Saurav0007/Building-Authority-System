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
Route::get('/employee',"EmployeeController@employee");
Route::get('/admin',"AdminController@admin");
Route::get('/systemLogin',"AdminController@systemLogin");
//Admin

Route::get('/Details',"AdminController@Details");
Route::get('/Report',"AdminController@Report");
Route::get('/Account',"AdminController@Account");
Route::get('/Shop_office',"AdminController@Shop_office");
Route::get('/RoomDetails',"AdminController@RoomDetails");
Route::get('/AccountDetails',"AdminController@AccountDetails");
Route::get('/Checked_In',"AdminController@CheckedInUser");
Route::get('/Checked_Out',"AdminController@CheckedOutUser");
// admin main function
Route::post('/SubmitAccountAdmin',"AdminController@AccountAdmin");
Route::post('/SubmitShopOfficeAdmin',"AdminController@ShopOfficeAdmin");
Route::get('{id}/deleteAccount',"AdminController@DeleteAcc");
Route::get('{id}/deletePreport',"AdminController@DeletePreport");
Route::get('{id}/deleteWreport',"AdminController@DeleteWreport");
Route::get('{id}/deleteSOdetails',"AdminController@deleteSOdetails");
Route::get('{id}/deleteRoomDetails',"AdminController@deleteRoomDetails");
Route::post('GiveFeedback',"AdminController@GiveFeedback");
Route::post('giveFeedback2',"AdminController@giveFeedback2");
Route::post("/editEmptyRoomDetails","AdminController@editEmptyRoomDetails");
Route::post("/editShopDetails","AdminController@editShopDetails");
//worker

Route::get('/WorkerFeedback',"WorkerController@Feedback");
Route::get('/Workeroffice',"WorkerController@office");
Route::get('/WorkerPresence',"WorkerController@presence");
Route::get('/WorkerReport',"WorkerController@Report");
Route::get('/Workershop',"WorkerController@shop");
Route::get('/Workerlogin',"WorkerController@workerlogin");
// Worker main Function
Route::post('/WorkerSubmitReport',"WokerReportController@WorkerReport");
Route::post('/WorkerLogSubmit',"WorkerController@WorkerLogFunction");
Route::post('workerCheckIn',"WorkerController@workerCheckin");
Route::post('workerCheckOut',"WorkerController@workerCheckOut");

// public
Route::get('PublicPresence',"PublicHomeController@Public_presence");
Route::get('Publicshop',"PublicHomeController@public_shop");
Route::get('Publicoffice',"PublicHomeController@public_office");
Route::get('askpermission',"PublicHomeController@askpermission");
Route::get('takepermission',"PublicHomeController@takepermission");
Route::get('PublicReport',"PublicHomeController@public_report");
Route::get("PublicFeedback","PublicHomeController@public_feedback");
Route::get('Publiclogin',"PublicHomeController@publiclogin");
Route::post('PublicCheckIn',"PublicHomeController@checkIn");
Route::post('PublicCheckOut',"PublicHomeController@checkOut");
// public Main function
Route::post('SubmitPublicReport',"PublicReportController@PublicReport");
Route::post('PublicLogSubmit',"PublicHomeController@PubliclogFunction");
Route::post('visitReason',"PublicHomeController@visitReason");

// Employee
Route::get("/permission_list","EmployeeController@permission_list");
Route::get("/permission_details","EmployeeController@permission_details");
Route::get("/public_details","EmployeeController@public_details");
Route::get("/public_regi","EmployeeController@public_regi");
Route::get("/EmptyRoomDetails","EmployeeController@EmptyRoomDetails");
Route::get('/EmpRoomDetailsdelete/{$id}',"EmployeeController@deleteEmpRoomDetails");
Route::get("/EmployeeRoomDetails","EmployeeController@RoomDetails");
Route::get("/shop_office","EmployeeController@shop_office");
Route::get("/worker_regi","EmployeeController@worker_regi");
Route::get("/worker_details","EmployeeController@worker_details");
Route::get("/emplogin","EmployeeController@emplogin");
Route::post('/permissionAccess',"EmployeeController@permissionCheck");
// Employee Function
Route::post('/WorkerAccountDetails',"EmployeeController@WorkerRegi");
Route::post('/PublicAccountDetails',"EmployeeController@PublicRegi");
Route::post('/SubmitRoom','EmployeeController@EmptyRoom');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('NewEmptyRoomDetails','EmployeeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
