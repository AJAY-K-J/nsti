<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDataTablesController;
use App\Http\Controllers\AppFormController;
use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\UserController;
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

Route::get('/','App\Http\Controllers\pagesController@index');

//Route::get('/register','App\Http\Controllers\pagesController@register');
//Route::get('/login','App\Http\Controllers\pagesController@login');

Route::get('/advanceDiploma','App\Http\Controllers\pagesController@advanceDiploma');
Route::get('/adit','App\Http\Controllers\pagesController@adit');
Route::get('/cits','App\Http\Controllers\pagesController@cits');
Route::get('/mechanicAc','App\Http\Controllers\pagesController@mechanicAc');
Route::get('/readingOfDrawing','App\Http\Controllers\pagesController@readingOfDrawing');
Route::get('/electricianAndWireman','App\Http\Controllers\pagesController@electricianAndWireman');
Route::get('/electronicMechanic','App\Http\Controllers\pagesController@electronicMechanic');
Route::get('/welder','App\Http\Controllers\pagesController@welder');

Route::get('/about','App\Http\Controllers\pagesController@about');
Route::get('/contact','App\Http\Controllers\pagesController@contact');
Route::get('/ctsnewagecourse','App\Http\Controllers\pagesController@ctsnewagecourse');
Route::get('/electrician','App\Http\Controllers\pagesController@electrician');
Route::get('/iot','App\Http\Controllers\pagesController@iot');

Route::get('/solar','App\Http\Controllers\pagesController@solar');








Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

//     Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
//     Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
//     Route::get('dashboard',[AdminController::class,'settings'])->name('admin.settings');

// });


// Route::group(['prefix'=>'user','middleware'=>'auth'],function(){

//     Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
//     Route::get('profile',[UserController::class,'profile'])->name('user.profile');
//     Route::get('dashboard',[UserController::class,'settings'])->name('user.settings');

// });

//AdminRouteGroup
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']],function(){

    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');





});

Route::get('getEducation/{id}',[AdminDataTablesController::class,'educationGet']);
Route::get('getExperience/{id}',[AdminDataTablesController::class,'experienceGet']);
Route::get('getDocs/{id}',[AdminDataTablesController::class,'docsGet']);

//admit
Route::post('admitStudents/{id}',[AdminDataTablesController::class,'admit'])->middleware('isAdmin');
//Reject
Route::post('rejectStudents/{id}',[AdminDataTablesController::class,'reject'])->middleware('isAdmin');
//waiting
Route::post('addWaiting/{id}',[AdminDataTablesController::class,'waitingList'])->middleware('isAdmin');

//admittedList
Route::get('admittedStudents',[AdminDataTablesController::class,'admittedList'])->middleware('isAdmin');
//WaitingList
Route::get('waitingListStudents',[AdminDataTablesController::class,'waiting'])->middleware('isAdmin');

//WaitingList
Route::get('rejectedStudents',[AdminDataTablesController::class,'rejectListShow'])->middleware('isAdmin');

//Adit Admitted
Route::get('aditAdmitted',[AdminDataTablesController::class,'aditAdmittedList'])->middleware('isAdmin');

//CITS R and AC Admitted
Route::get('RandAcAdmitted',[AdminDataTablesController::class,'RandAcAdmittedList'])->middleware('isAdmin');

//CITS R and AC Admitted
Route::get('ReadingOfDrawingAdmittedList',[AdminDataTablesController::class,'ReadingOfDrawingAdmittedListShow'])->middleware('isAdmin');

//CITS R and AC Admitted
Route::get('ElectricianWiremanAdmittedList',[AdminDataTablesController::class,'ElectricianWiremanAdmittedListShow'])->middleware('isAdmin');

//CITS Electronic Mechanic Admitted
Route::get('ElectronicMechanicAdmittedList',[AdminDataTablesController::class,'ElectronicMechanicAdmittedListShow'])->middleware('isAdmin');

//CITS Welder Admitted
Route::get('WelderAdmittedList',[AdminDataTablesController::class,'WelderAdmittedListShow'])->middleware('isAdmin');

//Solar Technician Admitted
Route::get('SolarTechnicianAdmitted',[AdminDataTablesController::class,'SolarTechnicianAdmittedList'])->middleware('isAdmin');

//IOT  Admitted
Route::get('IotAdmittedList',[AdminDataTablesController::class,'IotAdmittedListShow'])->middleware('isAdmin');

//ElectricianPowerDistributionList  Admitted
Route::get('ElectricianPowerDistributionList',[AdminDataTablesController::class,'ElectricianPowerDistributionListShow'])->middleware('isAdmin');


Route::get('TableData',[AdminDataTablesController::class,'showData'])->middleware('isAdmin');
Route::post('certVerify/{id}',[AdminDataTablesController::class,'certVerify'])->middleware('isAdmin');
Route::post('certReject/{id}',[AdminDataTablesController::class,'certReject'])->middleware('isAdmin');

Route::get('TableDataAdmission',[AdminDataTablesController::class,'TableDataForAdmission'])->middleware('isAdmin');



Route::post('feeVerify/{id}',[AdminDataTablesController::class,'feeVerify'])->middleware('isAdmin');
Route::post('feeReject/{id}',[AdminDataTablesController::class,'feeReject'])->middleware('isAdmin');


Route::post('postAppFormData',[ApplicationFormController::class,'saveData']);


Route::post('postEducations',[ApplicationFormController::class,'postEducations']);
Route::post('upCertPhoto',[ApplicationFormController::class,'upCertPhoto']);
Route::post('postExperience',[ApplicationFormController::class,'postExperience']);



//21-06-21FilesUpload
Route::post('uploadCandidatePhoto',[ApplicationFormController::class,'upCPhoto']);
Route::post('uploadaadharFrontPhoto',[ApplicationFormController::class,'upAadharF']);
Route::post('uploadaadharBackPhoto',[ApplicationFormController::class,'upAadharB']);
Route::post('postdoc',[UserController::class,'postDoc']);

//UserRouteGroup
Route::group(['prefix'=>'user','middleware'=>['isUser' ,'auth','PreventBackHistory']],function(){

    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');


Route::get('getdoc',[UserController::class,'getDoc']);
 



});

// //for vue path refresh--------BUG 15-06-2021
Route::get('{path}',[AdminController::class,'index'])->where( 'path', '.*' )->middleware('isAdmin');




