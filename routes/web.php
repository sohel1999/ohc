<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/register', 'RegistrationController@registerProcess')->name('register');
    Route::get('/veryfiy/{token}', 'RegistrationController@verify')->name('verify');
    Route::post('bookings', 'BookingController@store')->name('bookings.store');
    Route::get('hospitals', 'HospitalController@index')->name('frontend.hospital');
    Route::get('tips', 'Blogcontroller@index')->name('frontend.healthTip');
});



Route::group(['prefix' => 'dashboard', 'namespace' => 'Backend'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/login', 'AuthController@index')->name('admin.loginForm');
        Route::post('/login', 'AuthController@loginProcess')->name('admin.loginProcess');
        Route::get('forgot-password', 'PasswordRestController@showPasswordRestForm')->name('password.forgot');
        Route::post('password-reset-token', 'PasswordRestController@sendLink')->name('password.forgot.token');
        Route::get('password-change/{token}', 'PasswordRestController@passwordCahngeForm')->name('password.change.form');
        Route::post('password-change', 'PasswordRestController@passwordCahnge')->name('password.change');
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', 'AuthController@logout')->name('admin.logout');
        Route::get('/', 'DashboardController')->name('admin.dashboard');
        Route::group(['prefix' => 'users'], function () {
            Route::get('/admin', 'UserController@index')->name('user.admin');
            Route::get('/admin/create', 'UserController@create')->name('user.admin.create');
            Route::post('/admin/store', 'UserController@store')->name('user.admin.store');
            Route::get('/admin/{id}/edit', 'UserController@edit')->name('user.admin.edit');
            Route::post('/admin/{id}/update', 'UserController@update')->name('user.admin.update');
            Route::get('/admin/{id}/delete', 'UserController@delete')->name('user.admin.delete');
        });
        Route::group(['prefix' => 'healt-tips'], function () {
            Route::get('/', 'HealthTipControle@index')->name('healthTip.index');
            Route::get('/create', 'HealthTipControle@create')->name('healthTip.create');
            Route::post('/store', 'HealthTipControle@store')->name('healthTip.store');
            Route::get('/{id}/delete', 'HealthTipControle@delete')->name('healthTip.delete');
            Route::get('/{id}/show', 'HealthTipControle@show')->name('healthTip.show');
            Route::get('/{id}/edit', 'HealthTipControle@edit')->name('healthTip.edit');
            Route::post('/{id}/update', 'HealthTipControle@update')->name('healthTip.update');
        });

        Route::resource('categories', 'CategoryController');
        Route::resource('hospitals', 'HospitalController');
        Route::resource('doctors', 'DoctorController');
        Route::resource('booking', 'BookingController');
        Route::resource('patiens', 'PatientController');
        Route::resource('farmacy','FarmacyController');
    });
});
