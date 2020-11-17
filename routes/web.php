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

Route::get('/', function () {
    return view('homepage');
});
Route::get('/', 'FrontendController@index')->name('home');
Route::get('/apply_loan', 'FrontendController@application')->name('application');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/service_details', 'FrontendController@service_details')->name('service_details');
Route::get('/services', 'FrontendController@services')->name('services');
Route::get('/service_details', 'FrontendController@service_details')->name('service_details');
Route::get('/service', 'FrontendController@service')->name('service');
Route::get('/loan_application', 'FrontendController@loan_application')->name('loan_application');

Route::resource('loans' ,'LoanController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
