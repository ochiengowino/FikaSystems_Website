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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'WebsiteController@index');

Route::get('/about-us', 'WebsiteController@about');

Route::get('/mission-vision', 'WebsiteController@missionVision');

Route::get('/enterprise-solutions', 'WebsiteController@enterpriseSolutions');

Route::get('/services', 'WebsiteController@services');

Route::get('/industries', 'WebsiteController@industries');

Route::get('/contact-us', 'WebsiteController@contact');

Route::post('/contact-us', 'ContactFormsController@saveContact');

Route::post('/inquiry', 'ContactFormsController@saveInquiry');

Route::get('/software-applications', 'WebsiteController@softwareApps');

Route::get('/index2', 'WebsiteController@index2');

Route::get('/printing-imaging', 'WebsiteController@printingImaging');

Route::get('/document-management', 'WebsiteController@documentManagement');

Route::get('/power-pdf-standard', 'WebsiteController@powerPDFstandard');

Route::get('/paperport', 'WebsiteController@paperport');

Route::get('/power-pdf-advanced-ent', 'WebsiteController@powerPDFadvancedEnt');

Route::get('/communication-server', 'WebsiteController@communicationServer');

Route::get('/power-pdf-advanced', 'WebsiteController@powerPDFadvanced');

Route::get('/power-pdf-mobile', 'WebsiteController@powerPDFmobile');

Route::get('/ecopy', 'WebsiteController@ecopy');

Route::get('/eflow', 'WebsiteController@eflow');

Route::get('/control-suite', 'WebsiteController@controlSuite');

Route::get('/auto-store', 'WebsiteController@autoStore');

Route::get('/printix', 'WebsiteController@printix');

Route::get('/business-connect', 'WebsiteController@businessConnect');

Route::get('/kofax-capture', 'WebsiteController@kofaxCapture');

Route::get('/kofax-copitrak', 'WebsiteController@kofaxCopitrak');

Route::get('/equitrac', 'WebsiteController@equitrac');

Route::get('/express', 'WebsiteController@express');

Route::get('/omnipage', 'WebsiteController@omnipage');

Route::get('/output-manager', 'WebsiteController@outputManager');

Route::get('/safecom', 'WebsiteController@safecom');

Route::get('/psicapture', 'WebsiteController@psicapture');

Route::get('/elo', 'WebsiteController@elo');

Route::get('/download-file', 'WebsiteController@downloadFile');