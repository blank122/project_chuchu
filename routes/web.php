<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);


Auth::routes();

Route::get('/announcement', [App\Http\Controllers\User\UserController::class, 'announcement']);

Route::get('/branch', [App\Http\Controllers\BranchController::class, 'branch']);

Route::prefix('user')->group(function (){
    Route::controller(App\Http\Controllers\User\UserController::class)->group(function (){
        Route::get('/dashboard', 'index');
        Route::get('/announce', 'announcement');
        Route::get('/stud-info', 'user');
        Route::get('/documents', 'readingMats');
        Route::get('/documents/{readingFile}/view', 'viewPdf');
        Route::get('/help');
    });
});



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::controller(App\Http\Controllers\Admin\AdminDashboardController::class)->group(function () {
        Route::get('/dashboard', 'AdminDashboard');
        Route::get('/announcement',  'announcement');
        Route::get('/reading-materials', 'readingMats');
        Route::get('/slider', 'topnotch');
        Route::get('/student', 'studyante');
    });

    //announcement controller group by function
    Route::controller(App\Http\Controllers\Admin\AnnouncementController::class)->group(function () {
        Route::get('/announcement',  'AnnouncementIndex');
        Route::get('/announcement/create', 'create');
        Route::post('/announcement', 'store');
        Route::get('/announcement/{announcement}/edit', 'edit');
        Route::put('/announcement/{announcement}', 'update');
    });

    //reading materials controller group function
    Route::controller(App\Http\Controllers\Admin\ReadingMaterialsController::class)->group(function () {
        Route::get('/reading-materials', 'ReadingMatsIndex');
        Route::get('/reading-materials/create', 'create');
        Route::post('/reading-materials', 'store');
        Route::get('/reading-materials/{reading_file}/edit', 'edit');
        Route::put('/reading-materials/{reading_file}', 'update');
    });

    Route::controller(App\Http\Controllers\Admin\StudentController::class)->group(function () {
        Route::get('/student', 'index');
        Route::get('/student/create', 'create');
        Route::post('/student', 'store');
        Route::get('/student/{students}/edit', 'edit');
        Route::put('/student/{students}', 'update');
    });

    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('/slider', 'index');
        Route::get('/slider/create', 'create');
        Route::post('/slider', 'store');
    });
});
