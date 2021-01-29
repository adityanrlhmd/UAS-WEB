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

// Route::get('/login', 'LoginController@login');
// Route::post('/login/auth', 'LoginController@auth');
// Route::get('/logout', 'LoginController@logout');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('login')
//     ->namespace('Login')
//     ->group(function () {
//         Route::get('/', 'LoginController@login');
//         Route::post('/login/auth', 'LoginController@auth');
//         Route::get('/logout', 'LoginController@logout');
//     });

//     Route::get('/dashboardadmin', function () {
//         if(session()->exists('admin')) {
//             return view('/pages/admin/dashboard');
//         }
//         else { return redirect('/login'); }
//         return redirect('/login');
//     });

Route::prefix('/')
    ->namespace('Home')
    ->group(function () {
        Route::resource('/', 'HomepageController');
        Route::resource('/ginstagram', 'GinstagramController');
        Route::resource('/program', 'ProgramController');
    });

Route::prefix('home')
    ->namespace('Admin')
    ->group(function () {
        Route::resource('/', 'DashboardController');
        Route::resource('/news', 'NewsController');
        Route::resource('/galeri', 'GaleriController');
        Route::resource('/rekomendasi', 'RekomendasiController');
        Route::resource('/jadwaltv', 'JadwaltvController');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
