<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardEmployerController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [IndexController::class, 'index'])->name('jobseeker');


Route::middleware(['auth'])->group(function () {
    Route::get('redirect', [DashboardController::class, 'redirect']);
    Route::get('logout', [IndexController::class, 'logout']);
    Route::get('apply/{slug}', [JobController::class, 'apply']);
    Route::post('applied', [JobController::class, 'jobStore']);

    Route::get('profile', [ProfileController::class, 'profile']);

    Route::middleware(['Employer'])->group(function () {
        Route::get('dashboard-employer', [DashboardEmployerController::class, 'dashboard'])->name('dashboard-employer');

        //info job
        Route::get('add-jobs', [JobController::class, 'create']);
        Route::post('jobs', [JobController::class, 'store']);
        Route::get('delete-job/{id}', [JobController::class, 'hapus']);
        Route::get('edit-job/{slug}', [JobController::class, 'edit']);
        Route::put('edit-job/{slug}', [JobController::class, 'update']);

        //table pelamar
        Route::get('download/{id}', [DownloadController::class, 'download']);
        Route::get('job/delete/{id}', [JobController::class, 'destroy']);
    });

    Route::middleware(['role'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        //news
        Route::get('add-news ', [NewsController::class, 'create']);
        Route::post('news ', [NewsController::class, 'store']);
        Route::get('delete-news/{id}', [NewsController::class, 'destroy']);
        Route::get('edit-news/{slug}', [NewsController::class, 'edit']);
        Route::put('edit-news/{slug}', [NewsController::class, 'update']);
    });
});
Route::get('job', [JobController::class, 'index']);
Route::get('job/{slug}', [JobController::class, 'showDetail']);

Route::get('news', [NewsController::class, 'index']);
Route::get('news/{slug}', [NewsController::class, 'detail']);





require __DIR__ . '/auth.php';
