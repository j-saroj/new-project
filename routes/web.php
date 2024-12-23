<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillController;

Route::get('/', function () {
    return view('admin.pages.login');
});
Route::get('home', function () {
    return view('admin.pages.login');
})->name('home');


Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/authenticate', [AuthController::class, 'login'])->name('authenticate');
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminPanelController::class, 'dashboard'])->name('dashboard');


    // Route::get('/dashboard',  [AdminPanelController::class, 'dashboard'])->name('dashboard');


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/change-password', [UserController::class, 'showChangePasswordForm'])->name('change.password');
    Route::post('/update-password', [UserController::class, 'changepassword'])->name('update.password');

    Route::get('/organization', [OrganizationController::class, 'index'])->name('organization.index');
    Route::get('/organization/add', [OrganizationController::class, 'create'])->name('organization.create');
    Route::post('/organization/store', [OrganizationController::class, 'store'])->name('organization.store');
    Route::get('/organization/show/{organization}', [OrganizationController::class, 'show'])->name('organization.show');
    Route::get('/organization/edit/{organization}', [OrganizationController::class, 'edit'])->name('organization.edit');
    Route::post('/organization/update/{organization}', [OrganizationController::class, 'update'])->name('organization.update');

    Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');
    Route::get('/skills/add', [SkillController::class, 'create'])->name('skills.create');
    Route::post('/skills/store', [SkillController::class, 'store'])->name('skills.store');
    Route::get('/skills/show/{skill}', [SkillController::class, 'show'])->name('skills.show');
    Route::get('/skills/edit/{skill}', [SkillController::class, 'edit'])->name('skills.edit');
    Route::post('/skills/update/{skill}', [SkillController::class, 'update'])->name('skills.update');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/add', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/show/{gallery}', [GalleryController::class, 'show'])->name('gallery.show');
    Route::get('/gallery/edit/{gallery}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/gallery/update/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('/gallery/delete/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    Route::get('/gallery/status-change', [GalleryController::class, 'change_status'])->name('gallery.status');


    //Contact Us
    Route::get("/inquiries", [ContactController::class, 'index'])->name("inquiry.index");
    Route::get("/inquiries/show/{contact}", [ContactController::class, 'show'])->name("inquiry.show");
    Route::get("/inquiries/destroy/{contact}", [ContactController::class, 'destory'])->name("inquiry.destroy");
        // Route::get("/deleteshowcontactus/{id}", [ContactController::class, 'desletecontact'])->name("deleteshowcontactus");

    ;


    Route::get('/detach-image', [AdminPanelController::class, 'detach_image'])->name('detach.image');
    Route::get('/email-subscribe', [AdminPanelController::class, 'getemailsubscribe'])->name('emailshow');
    Route::get('/resume', [AdminPanelController::class, 'resume'])->name('resumeshow');
});
