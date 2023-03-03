<?php

use App\Http\Controllers\main\AdminPanel;
use App\Http\Controllers\main\HomePage;
use App\Http\Controllers\main\AuthController;
use Illuminate\Support\Facades\Auth;
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

/* ---------------------------------|.|----------------------------------- */
/**  Gate Pages starts here **/

Route::controller(AuthController::class)->group(function () {
    Route::group(['middleware' => 'showlogin'], function () {
        Route::get('/login', 'show_login')->name('show_login');
        Route::post('/getlogin', 'login')->name('login');

        Route::get('/register', 'show_register')->name('show_register');
        Route::post('/getregister', 'register')->name('register');
    });

    Route::get('/logout', 'logout')->name('logout');
});

/**  Gate Pages ends here **/
/* ---------------------------------|.|----------------------------------- */

/* ---------------------------------|.|----------------------------------- */
/**  Main Pages starts here **/

Route::group(['middleware' => 'userpanel'], function () {
    Route::get('/', [HomePage::class, 'mainpage'])->name('mainpage_default');
    Route::get('/home', [HomePage::class, 'mainpage'])->name('mainpage');
    Route::get('/home_detailed/{id}', [HomePage::class, 'home_detailed'])->name(
        'home_detailed'
    );

    // reservations
    Route::post('/home_reservation', [HomePage::class , 'home_reservation'])->name('home_reservation');

    // Home uploads
    Route::controller(HomePage::class)->group(function(){
        Route::get('/upload_home' , 'upload_home_view')->name('upload_home_view');

        Route::post('/post_one_page_home' , 'post_one_page_home')->name('post_one_page_home');
        Route::post('/post_second_page_home' , 'post_second_page_home')->name('post_second_page_home');
        Route::post('/post_third_page_home' , 'post_third_page_home')->name('post_third_page_home');

        // Route::post('/post_home' , 'upload_home_post')->name('upload_home_post');
    });
});

/**  Main Pages ends here **/
/* ---------------------------------|.|----------------------------------- */

/* ---------------------------------|.|----------------------------------- */
/**  Admin Panel starts here **/

Route::prefix('admin')
    ->namespace('admin')
    ->middleware(['adminpanel'])
    ->group(function () {
        Route::controller(AdminPanel::class)->group(function () {
            Route::get('/', 'dashboard')->name('dashboard');
        });
    });

/**  Admin Panel ends here **/
/* ---------------------------------|.|----------------------------------- */
