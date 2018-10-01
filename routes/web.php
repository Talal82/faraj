<?php

Route::get('/','PagesController@index') -> name('index');
Route::get('about','PagesController@about') -> name('about');
Route::get('careers','PagesController@careers') -> name('careers');
Route::get('clients','PagesController@clients') -> name('clients');
Route::get('companies-detail','PagesController@companiesDetail') -> name('companies-detail');
Route::get('contact','PagesController@contact') -> name('contact');
Route::get('holding-companies','PagesController@holdingCompanies') -> name('holding-companies');
Route::get('multimedia','PagesController@multimedia') -> name('multimedia');
Route::get('privacy-policy','PagesController@privacyPolicy') -> name('privacy-policy');
Route::get('services','PagesController@services') -> name('services');



Auth::routes();

Route::prefix('home') -> group(function() {
	Route::get('/', 'DashboardController@getDashboard') -> name('home');
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::get('users/{id}/changeStatus', 'UserController@changeStatus') -> name('users.status');
    Route::get('settings/accounts', 'AccountsController@getAccountSettings') -> name('account.index');
	Route::put('settings/accounts/{id}', 'AccountsController@updateAccountSettings') -> name('account.update');
	Route::get('privacy-policy', 'PrivacyPolicyController@index') -> name('policy.index');
	Route::put('privacy-policy/{id}/edit','PrivacyPolicyController@update') -> name('policy.update');
	Route::get('aboutus','AboutController@index') -> name('about.index');
	Route::put('aboutus/{id}/edit','AboutController@update') -> name('about.update');
	

	Route::delete('delete-multiple-users', 'UserController@deleteMultiple') -> name('users.delete-multiple');
	Route::delete('delete-multiple-roles', 'RoleController@deleteMultiple') -> name('roles.delete-multiple');
});
