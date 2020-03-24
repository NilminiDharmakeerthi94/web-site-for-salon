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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/', [
    'uses'=> 'functionController@getHome',
    'as'=> 'home'
]);
Route::get('/aboutus', [
  'uses'=> 'functionController@getAboutUs',
  'as'=>'aboutus'
]);
Route::get('/contacts', [
  'uses'=> 'functionController@getContacts',
  'as'=> 'contacts'
]);
Route::get('/gallery', [
'uses'=> 'functionController@getGallery',
'as'=>'gallery'
]);
Route::get('/servicers', [
  'uses'=> 'functionController@getService',
  'as'=>'servicers'
  ]);

 /* services */ 
Route::get('/service_dressing', [
  'uses'=> 'servicesController@getservice_dressing',
  'as' => 'service_dressing'
]);

Route::get('/service_facial', [
  'uses'=> 'servicesController@getservice_facial',
  'as'=>'service_facial'
]);
Route::get('/service_haircolors', [
  'uses'=> 'servicesController@getservice_haircolors',
  'as'=> 'service_haircolors'
]);
Route::get('/service_haircut', [
'uses'=> 'servicesController@getservice_haircut',
'as'=>'service_haircut'
]);
Route::get('/service_hairstyling', [
  'uses'=> 'servicesController@getservice_hairstyling',
  'as'=>'service_hairstyling'
  ]);
Route::get('/service_hairthreatment', [
  'uses'=> 'servicesController@getservice_hairthreatment',
  'as' => 'service_hairthreatment'
]);

Route::get('/service_treading', [
  'uses'=> 'servicesController@getservice_treading',
  'as'=>'service_treading'
  ]);
Route::get('/service_waxing', [
  'uses'=> 'servicesController@getservice_waxing',
  'as' => 'service_waxing'
]);
/*
Route::get('/imageupload',[
  'uses'=> 'imageuploadController@show',
  'as'=>'imageupload'
]);

/* image */

/* Route::get('image/{new}', 'imageuploadController@displayImage')->name('image.displayImage'); 
*/
Route::post('fileupload',[
  'as' =>'image_add',
  'uses'=>'imageuploadController@show'
]);

Route::get('image/{filename}', 'imageuploadController@displayImage')->name('image.displayImage');