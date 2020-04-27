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

Route::get('/', 'PagesController@start');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('personal', 'InformationControler@personal')->name('personal');
Route::get('personal/editar/{id}', 'InformationControler@update')->name('personal.update');
Route::put('personal/editar/{id}', 'InformationControler@updating')->name('personal.updating');
Route::get('personal/destroy/{id}', 'InformationControler@destroy')->name('personal.destroy');
Route::post('personal.create', 'InformationControler@create')->name('personal.create');

Route::get('contact', 'ContactController@contact')->name('contact');
Route::get('contact/editar/{id}', 'ContactController@update')->name('contact.update');
Route::put('contact/editar/{id}', 'ContactController@updating')->name('contact.updating');
Route::get('contact/destroy/{id}', 'ContactController@destroy')->name('contact.destroy');
Route::post('contact.create', 'ContactController@create')->name('contact.create');

Route::get('project', 'ProjectsController@projects')->name('projects');
Route::get('project/editar/{id}', 'ProjectsController@update')->name('projects.update');
Route::put('project/editar/{id}', 'ProjectsController@updating')->name('projects.updating');
Route::get('project/destroy/{id}', 'ProjectsController@destroy')->name('projects.destroy');
Route::post('project/create', 'ProjectsController@create')->name('projects.create');

Route::get('contributions', 'ContributionsController@contributions')->name('contributions');
Route::get('contributions/editar/{id}', 'ContributionsController@update')->name('contributions.update');
Route::put('contributions/editar/{id}', 'ContributionsController@updating')->name('contributions.updating');
Route::get('contributions/destroy/{id}', 'ContributionsController@destroy')->name('contributions.destroy');
Route::post('contributions/create', 'ContributionsController@create')->name('contributions.create');

Route::get('companys', 'CompanyController@companys')->name('companys');
Route::get('companys/editar/{id}', 'CompanyController@update')->name('companys.update');
Route::put('companys/editar/{id}', 'CompanyController@updating')->name('companys.updating');
Route::get('companys/destroy/{id}', 'CompanyController@destroy')->name('companys.destroy');
Route::post('companys/create', 'CompanyController@create')->name('companys.create');

Route::get('degrees', 'DegreesController@degrees')->name('degrees');
Route::get('degrees/editar/{id}', 'DegreesController@update')->name('degrees.update');
Route::put('degrees/editar/{id}', 'DegreesController@updating')->name('degrees.updating');
Route::get('degrees/destroy/{id}', 'DegreesController@destroy')->name('degrees.destroy');
Route::post('degrees/create', 'DegreesController@create')->name('degrees.create');

Route::get('hobbies', 'HobbiesController@hobbies')->name('hobbies');
Route::get('hobbies/editar/{id}', 'HobbiesController@update')->name('hobbies.update');
Route::put('hobbies/editar/{id}', 'HobbiesController@updating')->name('hobbies.updating');
Route::get('hobbies/destroy/{id}', 'HobbiesController@destroy')->name('hobbies.destroy');
Route::post('hobbies/create', 'HobbiesController@create')->name('hobbies.create');

Route::get('skills', 'SkillsController@skills')->name('skills');
Route::get('skills/editar/{id}', 'SkillsController@update')->name('skills.update');
Route::put('skills/editar/{id}', 'SkillsController@updating')->name('skills.updating');
Route::get('skills/destroy/{id}', 'SkillsController@destroy')->name('skills.destroy');
Route::post('skills/create', 'SkillsController@create')->name('skills.create');

Route::get('images', 'ImagesController@index')->name('image');

Route::get('templates', 'TemplatesController@index')->name('templates');
Route::get('templates/template_one', 'TemplatesController@template_one')->name('template_one');
Route::get('templates/template_two', 'TemplatesController@template_two')->name('template_two');
Route::get('templates/template_three', 'TemplatesController@template_three')->name('template_three');
Route::get('templates', 'TemplatesController@index')->name('templates');
Route::get('templates/template_one', 'TemplatesController@template_one')->name('template_one');
Route::get('templates/template_two', 'TemplatesController@template_two')->name('template_two');
Route::get('templates/template_four', 'TemplatesController@template_four')->name('template_four');

Route::post('images.upload', 'ImagesController@upload')->name('upload');
Auth::routes();

Route::get('donwload/{template}','pdfController@downloadpdf')->name('descargar');
Route::post('contact','pdfController@email')->name('contact');
