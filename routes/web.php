<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\PreventBackHistoryMiddleware;
use App\Http\Middleware\PreventCitizenBackHistoryMiddleware;

// ===== Frontend Controllers
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;

// ===== Backend Controllers
use App\Http\Controllers\backend\Auth\RegisterController;
use App\Http\Controllers\backend\Auth\LoginController;
use App\Http\Controllers\backend\Auth\ForgotPasswordController;
use App\Http\Controllers\backend\Auth\ResetPasswordController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\WhatWeOfferController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SaraResearchController;
use App\Http\Controllers\backend\StatisticsController;
use App\Http\Controllers\backend\OurAdvantagesController;
use App\Http\Controllers\backend\IndustryProductsController;
use App\Http\Controllers\backend\ProductController;

Route::get('/login', function () {
    // check if the user session expire web guard then redirect to admin.login page else redirect to frontend.login page
    if (Auth::guard('web')->check()) {
        return redirect()->route('admin.login');
    } else {
        return redirect()->route('frontend.home');
    }
})->name('login');


// ==== Frontend
Route::group(['prefix'=> '', 'middleware' => [PreventCitizenBackHistoryMiddleware::class]],function(){

    // ==== Home
    Route::get('/', [FrontendHomeController::class, 'index'])->name('frontend.home');

    // ==== Contact Us Store
    Route::post('/contact/send', [FrontendHomeController::class, 'sendContact'])->name('frontend.contact.send');    

    // ==== Under Construction
    Route::get('/under-construction', function () {
        return view('frontend.under-construction');
    })->name('under-construction');

    // ==== Thank You Page
    Route::get('/thank-you', function () {
        return view('frontend.thank-you');
    })->name('thank-you');
});


// ===== Admin Register
Route::get('admin/register', [RegisterController::class,'register'])->name('admin.register');
Route::post('admin/register/store', [RegisterController::class,'store'])->name('admin.register.store');

// ===== Admin Login/Logout
Route::get('admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('admin/login/store', [LoginController::class, 'authenticate'])->name('admin.login.store');

// ===== Send Password Reset Link
Route::get('admin/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.forget-password.request');
Route::post('admin/forgot-password/send-email-link', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.forget-password.send-email-link.store');

// ===== Reset Password
Route::get('admin/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
Route::post('admin/reset-password', [ResetPasswordController::class, 'updatePassword'])->name('admin.password.update');


Route::group(['prefix' => 'admin', 'middleware' => ['auth:web', PreventBackHistoryMiddleware::class]], function () {

    // ===== Admin Dashboard
    Route::get('home', [HomeController::class, 'adminHome'])->name('admin.dashboard');

    // ==== Update Password
    Route::get('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('update-password');

    // ==== Logout
    Route::post('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

    // ==== Pages Management
    Route::resource('page', PageController::class);

    // ==== Banner Management
    Route::resource('banner', BannerController::class);

    // ==== What We Offer Management
    Route::resource('what-we-offer', WhatWeOfferController::class);

    // ==== Services Management
    Route::resource('service', ServiceController::class);

    // ==== About Sara Research Management
    Route::resource('sara-research', SaraResearchController::class);

    // ==== Statistics Management
    Route::resource('statistics', StatisticsController::class);

    // ==== Our Advantages Management
    Route::resource('our-advantages', OurAdvantagesController::class);

    // ==== Industry Management
    Route::resource('industry-products', IndustryProductsController::class);

    // ==== Product Management
    Route::resource('product', ProductController::class);

});

// ==== Robots
Route::get('/robots.txt', function () {
    return response("User-agent: *\nDisallow:", 200)
    ->header('Content-Type', 'text/plain')
    ->header('X-Robots-Tag', 'noindex')
    ->header('X-Content-Type-Options', 'nosniff')
    ->header('X-XSS-Protection', '1; mode=block')
    ->header('X-Frame-Options', 'SAMEORIGIN');
});

// ==== Sitemap
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')
    ->header('Content-Type', 'text/xml')
    ->header('X-Robots-Tag', 'noindex')
    ->header('X-Content-Type-Options', 'nosniff')
    ->header('X-XSS-Protection', '1; mode=block')
    ->header('X-Frame-Options', 'SAMEORIGIN')
    ->header('Content-Type', 'application/xml')
    ->header('Content-Disposition', 'attachment; filename="sitemap.xml"')
    ->header('Content-Transfer-Encoding', 'binary');
});
