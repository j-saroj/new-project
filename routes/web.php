<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfoliocategoryController;
use App\Http\Controllers\WebPageController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\ExperienceController;



Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/authenticate', [AuthController::class, 'login'])->name('authenticate');
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminPanelController::class, 'dashboard'])->name('dashboard');

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
    Route::post('/skills/store', [SkillController::class, 'store'])->name('skill.store');
    Route::get('/skills/edit/{skill}', [SkillController::class, 'edit'])->name('skill.edit');
    Route::post('/skills/update/{skill}', [SkillController::class, 'update'])->name('skill.update');
    Route::post('/skills/delete/{skill}', [SkillController::class, 'destroy'])->name('skill.destroy');

    Route::get('/portfoliocategorys', [PortfoliocategoryController::class, 'index'])->name('portfoliocategory.index');
    Route::get('/portfoliocategory/show/{portfoliocategory}', [PortfoliocategoryController::class, 'show'])->name('category.show');
    Route::post('/portfoliocategory/store', [PortfoliocategoryController::class, 'store'])->name('portfoliocategory.store');
    Route::get('/portfoliocategory/edit/{portfoliocategory}', [PortfoliocategoryController::class, 'edit'])->name('portfoliocategory.edit');
    Route::post('/portfoliocategory/update/{portfoliocategory}', [PortfoliocategoryController::class, 'update'])->name('portfoliocategory.update');
    Route::post('/portfoliocategory/delete/{portfoliocategory}', [PortfoliocategoryController::class, 'destroy'])->name('portfoliocategory.destroy');

    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/edit/{portfolio}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::post('/portfolio/update/{portfolio}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::post('/portfolio/delete/{portfolio}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');

    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience.index');
    Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');
    Route::get('/experience/edit/{experience}', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::post('/experience/update/{experience}', [ExperienceController::class, 'update'])->name('experience.update');
    Route::post('/experience/delete/{experience}', [ExperienceController::class, 'destroy'])->name('experience.destroy');
    Route::get('/experience/show/{experience}', [ExperienceController::class, 'show'])->name('experience.show');
    Route::get('/experience/status-change', [ExperienceController::class, 'change_status'])->name('experience.change_status');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/show/{gallery}', [GalleryController::class, 'show'])->name('gallery.show');
    Route::get('/gallery/edit/{gallery}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/gallery/update/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('/gallery/delete/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    Route::get('/gallery/status-change', [GalleryController::class, 'change_status'])->name('gallery.status');

    Route::get('/award', [AwardController::class, 'index'])->name('award.index');
    Route::get('/award/show/{award}', [AwardController::class, 'show'])->name('award.show');
    Route::get('/award/add', [AwardController::class, 'create'])->name('award.create');
    Route::post('/award/store', [AwardController::class, 'store'])->name('award.store');
    Route::get('/award/edit/{award}', [AwardController::class, 'edit'])->name('award.edit');
    Route::post('/award/update/{award}', [AwardController::class, 'update'])->name('award.update');
    Route::post('/award/delete/{award}', [AwardController::class, 'destroy'])->name('award.destroy');
    Route::get('/award/status-change', [AwardController::class, 'change_status'])->name('award.change_status');


    Route::get('/journey', [JourneyController::class, 'index'])->name('journey.index');
    Route::get('/journey/show/{journey}', [JourneyController::class, 'show'])->name('journey.show');
    Route::get('/journey/add', [JourneyController::class, 'create'])->name('journey.create');
    Route::post('/journey/store', [JourneyController::class, 'store'])->name('journey.store');
    Route::get('/journey/edit/{journey}', [JourneyController::class, 'edit'])->name('journey.edit');
    Route::post('/journey/update/{journey}', [JourneyController::class, 'update'])->name('journey.update');
    Route::post('/journey/delete/{journey}', [JourneyController::class, 'destroy'])->name('journey.destroy');
    Route::get('/journey/status-change', [JourneyController::class, 'change_status'])->name('journey.change_status');





    //Contact Us
    Route::get("/inquiries", [ContactController::class, 'index'])->name("inquiry.index");
    Route::get("/inquiries/show/{contact}", [ContactController::class, 'show'])->name("inquiry.show");
    Route::post("/inquiries/destroy/{contact}", [ContactController::class, 'destroy'])->name("inquiry.destroy");

    


    Route::get('/detach-image', [AdminPanelController::class, 'detach_image'])->name('detach.image');
    Route::get('/email-subscribe', [AdminPanelController::class, 'getemailsubscribe'])->name('emailshow');
    Route::get('/resume', [AdminPanelController::class, 'resume'])->name('resumeshow');
});
Route::get('/', [WebPageController::class, 'index'])->name('front.home');
Route::get('/gallery', [WebPageController::class, 'gallery'])->name('front.gallery');
Route::get('/contact', [WebPageController::class, 'contactUs'])->name('front.contact');
Route::get('/experience', [WebPageController::class, 'experience'])->name('front.experience');
Route::get('/portfolio', [WebPageController::class, 'portfolio'])->name('front.portfolio');
Route::post('/inquiry/store', [WebPageController::class, 'inquiry'])->name('inquiry.store');
