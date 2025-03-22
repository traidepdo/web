<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;

Route::post('/login', [AdminAuthController::class, 'login']);
Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.showLogin');


Route::post('/logout', [AdminAuthController::class, 'logout'])->middleware('auth:sanctum');
