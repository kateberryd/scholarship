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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/courses', 'PagesController@courses');
Route::get('/about-glomode', 'PagesController@aboutGlomode');
Route::get('/about-uwi', 'PagesController@aboutUWI');
Route::get('/eligible-programmes', 'PagesController@programmesEligible');
Route::get('/programmes-avialable', 'PagesController@programmesAvailable');
Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@contact');



Route::group(['prefix' => 'auth'], function (){
    Route::get('/register', 'RegistrationController@create');
    Route::post('/register', 'RegistrationController@store')->name('user.store');
    

    Route::get('/login', 'LoginController@getLogin')->name('get_login');
    Route::post('/login', 'LoginController@Post')->name('post_login');


    Route::get('/portal/admin/login', 'LoginController@getAdminLogin')->name('get_AdminLogin');
    Route::post('/portal/admin/login', 'LoginController@AdminLogin')->name('post_adminLogin');


    Route::get('/activate/{email}/{token}', 'ActivationController@activate')->name('account_activation');
  
    // Recover Password Route Resources
    Route::get('/password-recovery', 'ForgotPasswordController@forgotPassword')->name('get_recovery');
    Route::post('/password-recovery', 'ForgotPasswordController@postForgotPassword')->name('password_recovery');
    // Reset Password Route Resources
    Route::get('/reset/{email}/{resetCode}', "ForgotPasswordController@resetPassword")->name('reset_password');
    Route::post('/reset/{email}/{resetCode}', "ForgotPasswordController@postResetPassword")->name('post_reset_password');

    Route::post('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('/AdminDashboard', 'RegistrationController@index')->name('admin.index');
    Route::get('/show/{slug}', 'RegistrationController@show')->name('user.show');
    Route::get('/delete/{slug}', 'RegistrationController@delete')->name('user.delete');
    Route::get('/credential', 'CredentialController@AllCredentials')->name('credential.all');

});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'PagesController@home')->name('landing');
    Route::get('/ApplicantDashboard', 'CredentialController@index')->name('credential.index');
    Route::post('/complete', 'CredentialController@store')->name('credential.store');
    Route::get('/UndergraduateApplicant', 'CredentialController@undergraduate')->name('undergraduate.index');
    Route::post('/UndergraduateApplicant', 'CredentialController@storeundergraduate')->name('undergraduate.store');
    Route::get('/PrintDetails/{id}', 'CredentialController@print')->name('credential.print');
    Route::get('/edit/{id}', 'RegistrationController@edit')->name('credential.edit');
    Route::post('/update/{slug}', 'RegistrationController@update')->name('user.update');
    Route::post('/update/Applicant/{slug}', 'CredentialController@updateundergraduate')->name('undergraduate.update');
    Route::post('/update/ExamDetails/{slug}', 'CredentialController@update')->name('credential.update');
    Route::get('/payment/completed/{id}', 'CredentialController@payment')->name('credential.payment');

});