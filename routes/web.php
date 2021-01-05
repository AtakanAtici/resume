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

Route::get('/', 'FrontController@index')->name('index');

Route::prefix('admin')->middleware('auth')->group(function (){
   Route::get('/', 'AdminController@index')->name('admin.index');

   Route::prefix('/education')->group(function (){
       Route::get('/list', 'EducationController@list')->name('admin.education.list');
       Route::post('/change-status', 'EducationController@changeStatus')->name('admin.education.changeStatus');
       Route::post('/delete', 'EducationController@delete')->name('admin.education.delete');
       Route::get('/add', 'EducationController@addShow')->name('admin.education.add');
       Route::post('/add', 'EducationController@add');
   });

   //Experiences
   Route::get('/experience-list', 'ExperienceController@list')->name('admin.experience.list');
   Route::get('/experience-add', 'ExperienceController@addShow')->name('admin.experience.add');
   Route::post('/experience-add', 'ExperienceController@add');
   Route::post('/experience-change-status', 'ExperienceController@changeStatus')->name('admin.experience.changeStatus');
   Route::post('/experience-delete', 'ExperienceController@delete')->name('admin.experience.delete');


   Route::get('/personal-information' , 'PersonalInformationController@index')->name('admin.personalInformation.index');
   Route::post('personal-information' , 'PersonalInformationController@update');

});
















Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

