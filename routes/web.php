<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StudyController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // * for members
    Route::get('/member', [MemberController::class, 'index'])->name('member');
    Route::get('/member/create', [MemberController::class, 'create'])->name('member.create');

    // * for experiences
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');

    // * for formation
    Route::get('/formation', [FormationController::class, 'index'])->name('formation');
    Route::get('/formation/create', [FormationController::class, 'create'])->name('formation.create');
    Route::post('/formation/store', [FormationController::class, 'store'])->name('formation.store');

    // * for links
    Route::get('/link', [LinkController::class, 'index'])->name('link');
    Route::get('/link/create', [LinkController::class, 'create'])->name('link.create');
    Route::post('/link/store', [LinkController::class, 'store'])->name('link.store');

    // * for Others
    Route::get('/other', [OthersController::class, 'index'])->name('other');
    Route::get('/other/create', [OthersController::class, 'create'])->name('other.create');
    Route::post('/other/store', [OthersController::class, 'store'])->name('other.store');

    // * for roles
    Route::get('/role', [RoleController::class, 'index'])->name('role');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');

    // * for skills
    Route::get('/skill', [SkillController::class, 'index'])->name('skill');
    Route::get('/skill/create', [SkillController::class, 'create'])->name('skill.create');
    Route::post('/skill/store', [SkillController::class, 'store'])->name('skill.store');

    // * for study
    Route::get('/study', [StudyController::class, 'index'])->name('study');
    Route::get('/study/create', [StudyController::class, 'create'])->name('study.create');
    Route::post('/study/store', [StudyController::class, 'store'])->name('study.store');
});
