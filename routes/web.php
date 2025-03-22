<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SaleController;

Route::get('/', [HomeController::class, 'homePage']);
Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboardPage');
Route::get('/categoryPage', [CategoryController::class, 'categoryPage'])->name('categoryPage');
Route::get('/userRegistration', [UserController::class, 'userRegistrationPage']);
Route::get('/userLogin', [UserController::class, 'userLoginPage']);
Route::get('/resetPassword', [UserController::class, 'resetPasswordPage']);
Route::get('/sendOtp', [UserController::class, 'sendOtpPage']);
Route::get('/verifyOtp', [UserController::class, 'verifyOtpPage']);
Route::get('/userProfile', [UserController::class, 'profilePage']);
Route::get('/productPage', [ProductController::class, 'productPage']);
Route::get('/invoicePage', [InvoiceController::class, 'invoicePage']);
Route::get('/customerPage', [CustomerController::class, 'customerPage']);
Route::get('/salePage', [SaleController::class, 'salePage']);
Route::get('/reportPage', [ReportController::class, 'reportPage']);