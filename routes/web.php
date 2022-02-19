<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MemberDataController;
use App\Http\Controllers\Admin\ServiceScheduleController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::controller(MemberDataController::class)->group(function (){
    Route::get('/member-data', 'index')->name('member-data-index');

    Route::get('/member-data/add', 'add')->name('member-data-add');
    Route::post('/member-data/add', 'addPost')->name('member-data-add-post');

    Route::get('/member-data/check/{id}', 'check')->name('member-data-check');

    Route::delete('/member-data/delete/{id}', 'destroy')->name('member-data-delete');

});

Route::controller(ServiceScheduleController::class)->group(function (){
    Route::get('/service-schedule', 'index')->name('service-schedule-index');

    Route::get('/service-schedule/add', 'add')->name('service-schedule-add');
    Route::post('/service-schedule/add', 'addPost')->name('service-schedule-add-post');

    Route::get('/service-schedule/check/{id}', 'check')->name('service-schedule-check');

    Route::delete('/service-schedule/delete/{id}', 'destroy')->name('service-schedule-delete');
});

Route::controller(BlogController::class)->group(function (){
    Route::get('/blog', 'index')->name('blog-index');

    Route::get('/blog/add', 'add')->name('blog-add');
    Route::post('/blog/add', 'addPost')->name('blog-add-post');

    Route::get('/blog/check/{id}', 'check')->name('blog-check');

    Route::delete('/blog/delete/{id}', 'destroy')->name('blog-delete');
});
