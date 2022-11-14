<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController as IndexController;
use App\Http\Controllers\Admin\AuthController as AuthController;
use App\Http\Controllers\Admin\DashboardController as DashboardController;
use App\Http\Controllers\Admin\ProfileController as ProfileController;
use App\Http\Controllers\Admin\FeedbackController as FeedbackController;
use App\Http\Controllers\Admin\ContentController as ContentController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/service', [IndexController::class, 'service'])->name('service');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::post('/save-contact', [IndexController::class, 'saveContact'])->name('save.contact');


Route::group([
    'prefix' => 'administrator'
], function () {
    Route::get('/', [AuthController::class, 'index'])->name('admin');
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');
});

Route::group([
    'middleware' => ['auth:admin'], 'prefix' => 'administrator'
], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::post('profile/change_password', [ProfileController::class, 'changePassword'])->name('admin.profile.change_password');
    Route::get('settings', [ProfileController::class, 'setting'])->name('admin.settings');
    Route::post('update-settings/{id}', [ProfileController::class, 'updateSetting'])->name('admin.update.settings');

    Route::get('feedback', [FeedbackController::class, 'index'])->name('admin.feedback');
    Route::get('feedback/remove/{id}', [FeedbackController::class, 'feedbackRemove'])->name('admin.feedback.remove');

    Route::group(['prefix' => 'content'], function () {
        Route::get('', [ContentController::class, 'index'])->name('admin.content');
        Route::get('/{page}', [ContentController::class, 'content'])->name('admin.content.listing');
        Route::get('edit/{id}', [ContentController::class, 'contentEdit'])->name('admin.content.edit');
        Route::post('update/{id}', [ContentController::class, 'contentUpdate'])->name('admin.content.update');
    });
});

// Clear configuration cache:
Route::get('/optimize-clear', function () {
    $status = Artisan::call('optimize:clear');
    return '<h1>Configurations optimize cleared</h1>';
});
