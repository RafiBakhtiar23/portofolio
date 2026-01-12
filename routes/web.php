<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\HomeSectionController;
use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SkillCategoryController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\CertificateController;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| DASHBOARD (HIDDEN)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

/*
|--------------------------------------------------------------------------
| PROFILE (OPTIONAL)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN PANEL (PROTECTED)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // HOME
        Route::get('/home', [HomeSectionController::class, 'edit'])
            ->name('home.edit');
        Route::put('/home', [HomeSectionController::class, 'update'])
            ->name('home.update');

        // ABOUT
        Route::get('/about', [AboutSectionController::class, 'edit'])
            ->name('about.edit');
        Route::put('/about', [AboutSectionController::class, 'update'])
            ->name('about.update');

        // PROJECTS
        Route::resource('projects', ProjectController::class)
            ->except(['show']);

        // SKILLS
        Route::resource('skills', SkillController::class)
            ->except(['show']);

        // SKILL CATEGORIES
        Route::resource('skill-categories', SkillCategoryController::class)
            ->except(['show']);

        // EXPERIENCE
        Route::resource('experience', ExperienceController::class)
            ->except(['show']);

        // CERTIFICATES
        Route::resource('certificates', CertificateController::class)
            ->except(['show']);

        // OPTIONAL PREVIEW
        Route::get('/projects/{project}', [ProjectController::class, 'show'])
            ->name('projects.show');
    });

require __DIR__ . '/auth.php';
