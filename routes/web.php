<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProjectManagementController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.components.home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth', 'prefix' => 'admin-dashboard'], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
    Route::resource('/projects', ProjectManagementController::class);
});


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('frontend.home');
    Route::get('/about', 'about')->name('frontend.about');
    Route::get('/projects', 'projects')->name('frontend.projects');
    Route::get('/contact', 'contact')->name('frontend.contact');
    Route::get('/details/{id}', 'show')->name('frontend.show');
});
