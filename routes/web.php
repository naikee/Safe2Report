<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ManageUsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'create']);

$email_verification = get_option('email_verification', 'no');

Route::middleware($email_verification == 'yes' ? ['auth', 'verified'] : 'auth')->group(function () {

    //Additional Route
    Route::get('/myschool/create', [SchoolController::class, 'create'])->name('school');
    Route::post('/myschool/create/{id?}', [SchoolController::class, 'store'])->name('school.store');

    Route::middleware('createschool')->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.view');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/myschool', [SchoolController::class, 'myschool'])->name('myschool.view');
        Route::get('/myschool/edit', [SchoolController::class, 'editSchool'])->name('myschool.edit');
        Route::patch('/myschool/edit/{id?}', [SchoolController::class, 'updateSchool'])->name('myschool.update');

        //Admin
        Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
            Route::match(['get', 'post'], 'general-settings/{store?}', [SettingsController::class, 'settings'])->name('settings.update');
            Route::get('/schools', [SchoolController::class, 'index'])->name('schools.index');
            Route::get('/schools/view/{id?}', [SchoolController::class, 'show'])->name('schools.show');
            Route::get('/schools/create', [SchoolController::class, 'createSchool'])->name('schools.create');
            Route::post('/schools/create/{id?}', [SchoolController::class, 'storeSchool'])->name('schools.store');
            Route::get('/schools/edit/{id?}', [SchoolController::class, 'edit'])->name('schools.edit');
            Route::patch('/schools/edit/{id?}', [SchoolController::class, 'update'])->name('schools.update');
            Route::get('/schoolmanagers/active', [ManageUsersController::class, 'activeUsers'])->name('schoolmanagers.active');
            Route::get('/schoolmanagers/pending', [ManageUsersController::class, 'pendingUsers'])->name('schoolmanagers.pending');
            Route::resource('schoolmanagers', ManageUsersController::class);
        });
    });
});

require __DIR__ . '/auth.php';
