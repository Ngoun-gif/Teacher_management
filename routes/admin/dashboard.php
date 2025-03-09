<?php
use Illuminate\Support\Facades\Route;
Route::get('/dashboard',[\App\Http\Controllers\backend\BDashboardController::class,'index'])->name('dashboard');