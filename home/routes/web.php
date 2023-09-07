<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\FeedbackController;
use App\HTTP\Controllers\BcaController;
use App\HTTP\Controllers\BimController;
use App\HTTP\Controllers\BscController;
use App\HTTP\Controllers\LoginController;
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
    return view('welcome');
});
Route::resource('index', HomeController::class);
Route::resource('quiz_game', QuizController::class);
Route::resource('feedback', FeedbackController::class);

// For Bca
Route::resource('BCA',BcaController::class);
// For Bca Faculties
Route::get('bca', [BcaController::class, 'index'])->name('faculties.bca');
// For Bca Syllabus
Route::get('syl1', [BcaController::class, 'firstsyl'])->name('bca_syl.1syl');
Route::get('syl2', [BcaController::class, 'secondsyl'])->name('bca_syl.2syl');
// For Bca OldQuestions
Route::get('old1', [BcaController::class, 'firstold'])->name('bca_old.1old');
Route::get('old2', [BcaController::class, 'secondold'])->name('bca_old.2old');


// For Bim
Route::resource('BIM',BimController::class);
// For Bim Faculties
Route::get('bim', [BimController::class, 'index'])->name('faculties.bim');
// For Bim Syllabus
Route::get('1syl', [BimController::class, 'firstsyl'])->name('bim_syl.1syl');
Route::get('2syl', [BimController::class, 'secondsyl'])->name('bim_syl.2syl');
// For Bim OldQuestions
Route::get('1old', [BimController::class, 'firstold'])->name('bim_old.1old');
Route::get('2old', [BimController::class, 'secondold'])->name('bim_old.2old');


// For Bsc
Route::resource('BSC',BscController::class);
// For Bsc Faculties
Route::get('bsc', [BscController::class, 'index'])->name('faculties.bsc');
// For Bsc Syllabus
Route::get('syla', [BscController::class, 'firstsyl'])->name('bsc_syl.1syl');
Route::get('sylb', [BscController::class, 'secondsyl'])->name('bsc_syl.2syl');
// For Bsc OldQuestions
Route::get('olda', [BscController::class, 'firstold'])->name('bsc_old.1old');
Route::get('oldb', [BscController::class, 'secondold'])->name('bsc_old.2old');

Route::resource('Profile', ProfileController::class);
Route::get('profile1', [ProfileController::class, 'index'])->name('user.profile');
Route::post('profile2', [ProfileController::class, 'store'])->name('user.profile.store');


// for login setup
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('homes.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });



    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        // For BCA Semester
        Route::get('sem1', [BcaController::class, 'firstsem'])->name('bca_sem.1sem');
        Route::get('sem2', [BcaController::class, 'secondsem'])->name('bca_sem.2sem');

        // For Bim Semester
        Route::get('1sem', [BimController::class, 'firstsem'])->name('bim_sem.1sem');
        Route::get('2sem', [BimController::class, 'secondsem'])->name('bim_sem.2sem');

        // For Bsc Semester
        Route::get('sema', [BscController::class, 'firstsem'])->name('bsc_sem.1sem');
        Route::get('semb', [BscController::class, 'secondsem'])->name('bsc_sem.2sem');


    });
});
