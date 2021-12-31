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



Route::get('/',                 ['as'=>'showAllDetilLinks',         'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@index']);
Route::get('AllDetilLink',      ['as'=>'AllDetil.Links',         'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@showAllDetilLinks']);
Route::post('/store1',          ['as'=>'store1',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@store']); // اضافة رسالة
Route::get('AllDetilLink',      ['as'=>'AllDetil.Links',  'uses' => 'App\Http\Controllers\Controller_WebSite\myController@showAllDetilLinks']);

Route::get('/Dash',             ['as'=>'Dash.admin',      'uses' =>'App\Http\Controllers\Controller_WebSite\myController@index_Dashbord']);
Route::get('/addTitile',        ['as'=>'add.Titile',      'uses' =>'App\Http\Controllers\Controller_WebSite\myController@addTitile']); //عرض صفحة الاضافة
Route::get('/storTitel',        ['as'=>'stor.Titile',      'uses' =>'App\Http\Controllers\Controller_WebSite\myController@storTitel']);
Route::get('/storNameTitel',    ['as'=>'stor.NameTitile',   'uses' =>'App\Http\Controllers\Controller_WebSite\myController@storNameTitel']);
Route::post('/storePhoto',       ['as'=>'store.Photo',     'uses' =>'App\Http\Controllers\Controller_WebSite\myController@storePhoto']); // عرض صفحة اضافة مدونة


Route::get('/addCon',           ['as'=>'add.con',        'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@addCon']); // عرض صفحة اضافة وسائل التواصل في الصفحة الرئيسية
Route::get('/storeCon',         ['as'=>'store.Con',      'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@storeCon']); // اضافة وسائل تواصل في الصفحة الرئيسة


Route::get('/edit/{lang_id}',   ['as'=>'edit.abd',      'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@edit']);    // عرض بيانات التواصل للتعديل
Route::get('/delete/{lang_id}', ['as'=>'delete',         'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@delete']); // حذف بيانات التواصل
Route::get('/update/{lang_id}', ['as'=>'update.upd',     'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@update']); // تعديل على بيانات التةاصل

Route::get('/editForAddTitel/{lang_id}', ['as'=>'edit.ForAddTitel',     'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@editForAddTitel']);    // عرض بيانات اسم العنوان للتعديل
Route::get('/deleteForAddTitel/{lang_id}', ['as'=>'delete.ForAddTitel', 'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@deleteForAddTitel']); // حذف بيانات اسم العنوان
Route::get('/updateForAddTitel/{lang_id}', ['as'=>'update.ForAddTitel', 'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@updateForAddTitel']); // تعديل على بيانات اسم العنوان


Route::get('/editForTitel/{lang_id}',   ['as'=>'edit.ForTitel',   'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@editForTitel']);    // عرض بيانات لالعنوان للتعديل
Route::get('/deleteForTitel/{lang_id}', ['as'=>'delete.ForTitel', 'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@deleteeditForTitel']); // حذف بيانات العنوان
Route::get('/updateForTitel/{lang_id}', ['as'=>'update.ForTitel', 'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@updateeditForTitel']); // تعديل على بيانات العنوان


Route::get('/addPlog',           ['as'=>'add.Plog',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@showAddPlog']); // عرض صفحة اضافة مدونة
Route::post('/StorePlog',         ['as'=>'Store.Plog',      'uses' =>'App\Http\Controllers\Controller_WebSite\myController@StorePlog']); // اضافة مدونة
Route::get('/showPlog/{lang_id}',['as'=>'show.Plog',      'uses' =>'App\Http\Controllers\Controller_WebSite\myController@showPlog']); // اضافة مدونة

Route::get('/addFooter',           ['as'=>'add.Footer',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@addFooter']); // عرض صفحة اضافة مدونة
Route::get('/storeFooter',           ['as'=>'store.Footer',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@storeFooter']); // عرض صفحة اضافة مدونة

Route::get('/addExperince',           ['as'=>'add.Experince',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@addExperince']); // عرض صفحة اضافة مدونة
Route::get('/storeExperince',           ['as'=>'store.Experince',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@storeExperince']); // عرض صفحة اضافة مدونة

Route::get('/addInstitute',           ['as'=>'add.Institute',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@addInstitute']); // عرض صفحة اضافة مدونة
Route::get('/storeInstitute',           ['as'=>'store.Institute',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@storeInstitute']); // عرض صفحة اضافة مدونة

Route::get('/addCV',                    ['as'=>'add.CV',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@addCV']); // عرض صفحة اضافة مدونة
Route::post('/storeCV',                   ['as'=>'store.CV',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@storeCV']); // عرض صفحة اضافة مدونة

Route::get('/AddPercent',                    ['as'=>'Add.Percent',        'uses' =>'App\Http\Controllers\Controller_WebSite\ControllerForIndex@AddPercent']); // عرض صفحة اضافة مدونة
Route::post('/storePercent',                   ['as'=>'store.Percent',        'uses' =>'App\Http\Controllers\Controller_WebSite\myController@storePercent']); // عرض صفحة اضافة مدونة


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ازا انا مستخدم مسر معين بستخدم url اما ازا مستخدم اسم المسار بستخدم طريقة ال route

