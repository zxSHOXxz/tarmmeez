<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\JopController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\WorkController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function(){

Route::prefix('admin')->name('admin.')->middleware('auth' , 'check_user')->group(function(){
    Route::get('/' , [AdminController::class , 'index'])->name('index');
    Route::resource('/services' , ServiceController::class);
    Route::resource('/works' , WorkController::class);
    Route::resource('/images' , ImageController::class);
    Route::resource('/blogs' , BlogController::class);
    Route::resource('/jops' , JopController::class);
    Route::resource('/bookings' , BookingController::class)->except('create','show','edit','update');
    Route::resource('/contacts' , ContactController::class)->except('create','show','edit','update');
    Route::resource('/employments' , EmploymentController::class)->except('create','show','edit','update');
    Route::resource('/consultations' , ConsultationController::class)->except('create','show','edit','update');
    
});
Route::prefix('/')->group(function(){
    Route::get('/' , [App\Http\Controllers\FrontAnd\IndexController::class , 'index'])->name('index');
    Route::get('/download_en' , [App\Http\Controllers\FrontAnd\IndexController::class , 'download_en'])->name('download_en');
    Route::get('/download_ar' , [App\Http\Controllers\FrontAnd\IndexController::class , 'download_ar'])->name('download_ar');
    Route::get('/contact' , [App\Http\Controllers\FrontAnd\ContactController::class , 'index'])->name('index-contact');
    Route::post('/contact' , [ContactController::class,'store']);

    Route::get('/about' , [App\Http\Controllers\FrontAnd\AboutController::class , 'index'])->name('index-about');
    Route::get('/business-identity' , [App\Http\Controllers\FrontAnd\BusinessIdentityController::class , 'index'])->name('index-business-identity');
    Route::get('/blog' , [App\Http\Controllers\FrontAnd\BlogController::class , 'index'])->name('index-blog');
    Route::get('/booking' , [App\Http\Controllers\FrontAnd\BookingController::class , 'index'])->name('index-booking');
    Route::get('/engine-optimization' , [App\Http\Controllers\FrontAnd\EngineOptimizationController::class , 'index'])->name('index-engine-optimization');
    Route::get('/jop' , [App\Http\Controllers\FrontAnd\JopController::class , 'index'])->name('index-jop');
    //start get data json
    Route::get('/jop/{id}' , [App\Http\Controllers\FrontAnd\JopController::class , 'index_json']);
    //end get data json
    Route::post('/employment' , [EmploymentController::class,'store'])->name('employment.store');
    
    Route::get('/mobile-application' , [App\Http\Controllers\FrontAnd\MobileApplicationController::class , 'index'])->name('index-mobile-application');
    Route::get('/online-store' , [App\Http\Controllers\FrontAnd\OnlineStoreController::class , 'index'])->name('index-online-store');
    Route::get('/social' , [App\Http\Controllers\FrontAnd\SociaController::class , 'index'])->name('index-social');
    Route::get('/strategy' , [App\Http\Controllers\FrontAnd\StrategyController::class , 'index'])->name('index-strategy');
    Route::get('/terms-and-conditions' , [App\Http\Controllers\FrontAnd\TermsAndConditionsController::class , 'index'])->name('index-terms-and-conditions');
    Route::get('/voice-over' , [App\Http\Controllers\FrontAnd\VoiceOverController::class , 'index'])->name('index-voice-over');
    Route::get('/web' , [App\Http\Controllers\FrontAnd\WebController::class , 'index'])->name('index-web');
    Route::get('/work' , [App\Http\Controllers\FrontAnd\WorkController::class , 'index'])->name('index-work');
    Route::get('/policy' , [App\Http\Controllers\FrontAnd\PolicyController::class , 'index'])->name('index-policy');
    Route::post('/consultation' , [App\Http\Controllers\ConsultationController::class , 'store']);
    Route::get('/professional-approach/{id}', [App\Http\Controllers\FrontAnd\ProfessionalApproachController::class, 'show'])->name('professional-approach');
    
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('not-allowed','not_allowed');
});
