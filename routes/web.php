<?php

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
Route::group(['middleware' => ['install']], function () {
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth']], function () {

	 Route::any('setting','SettingController@index')->name('setting');

	 Route::match(['get', 'post'], 'profile', 'ProfileController@profile')->name('profile');
	 Route::match(['get', 'post'], 'password', 'ProfileController@password_change')->name('password');
	 Route::get('logs', 'ProfileController@user_logs')->name('user_log');

	Route::group(['as' => 'user.', 'prefix' => 'user'], function () {
		 Route::resource('role','RoleController');
		 Route::put('change-status/{value}/{id}','UserController@status')->name('change_status');
		 Route::resource('user-manage','UserController');

	  });
		 Route::get('language','LanguageController@index')->name('language');
		 Route::match(['get', 'post'], 'create', 'LanguageController@create')->name('language.create');

		 Route::get('language/edit/{id?}', 'LanguageController@edit')->name('language.edit');
		 Route::patch('language/update/{id}', 'LanguageController@update')->name('language.update');
		 Route::delete('/language/delete/{id}', 'LanguageController@delete')->name('language.delete');


 		Route::get('get_mowja','VillageController@get_mowja');
 		Route::get('get_village','VillageController@get_village');

		 Route::resource('word','WordController');
		 Route::resource('mowja','MowjaController');
		 Route::resource('village','VillageController');
         
         Route::get('/go_input', 'InputController@go_input');
         Route::get('/input/data', 'InputController@input_form')->name('input_form');
         Route::post('input_first', 'InputController@input_first')->name('input_first');
         Route::post('input_second', 'InputController@input_second')->name('input_second');
         Route::get('/back_first_step', 'InputController@back_first_step');
         Route::get('/back_second_step', 'InputController@back_second_step');
         Route::get('/get_packege_option', 'InputController@get_packege_option');
	     Route::get('/get_variation_value_row', 'InputController@get_variation_value_row');
		 Route::resource('input','InputController');

         Route::get('/get_user', 'DataController@get_user');
         Route::post('/people_search', 'DataController@people_search')->name('people_search');
		 Route::resource('data','DataController');


 });

Route::get('/home', 'HomeController@index')->name('home');

});


/*::::::::::::::::::::install::::::::::::::::::*/
Route::get('/installs', 'Install\InstallController@index');
Route::get('install/database', 'Install\InstallController@database');
Route::post('install/process_install', 'Install\InstallController@process_install');
Route::get('install/create_user', 'Install\InstallController@create_user');
Route::post('install/store_user', 'Install\InstallController@store_user');
Route::get('install/system_settings', 'Install\InstallController@system_settings');
Route::post('install/finish', 'Install\InstallController@final_touch'); 
