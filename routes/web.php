<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProjectManagementController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth', 'prefix' => 'admin-dashboard'], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
    Route::resource('/projects', ProjectManagementController::class);
});
