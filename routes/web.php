<?php

use App\Http\Controllers\backend\BDashboardController;
use App\Http\Controllers\backend\BCourseController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\frontend\EventController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PricingController;
use App\Http\Controllers\frontend\TrainerController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(HomeController::class)->group(function () {
    Route::get("/", [HomeController::class, "index"])->name("home");
});
Route::controller(AboutController::class)->group(function () {
    Route::get("/about", [AboutController::class, "index"])->name("about");
});
Route::controller(CourseController::class)->group(function () {
    Route::get("/courses", [CourseController::class, "index"])->name("courses");
});
Route::controller(TrainerController::class)->group(function () {
    Route::get("/trainers", [TrainerController::class, "index"])->name("trainers");
});
Route::controller(EventController::class)->group(function () {
    Route::get("/event", [EventController::class, "index"])->name("event");
});
Route::controller(PricingController::class)->group(function () {
    Route::get("/pricing", [PricingController::class, "index"])->name("pricing");
});
Route::controller(ContactController::class)->group(function () {
    Route::get("/contact", [ContactController::class, "index"])->name("contact");
});




// Backend block
include 'admin/dashboard.php';
include 'admin/course.php';
include 'admin/major.php';
include 'admin/subject.php';
include 'admin/teacher.php';









