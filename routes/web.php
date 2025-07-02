<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

    Route::get('/', function () {
        return Inertia::render('Welcome');
    });
    Route::get('/calculator', function () {
        return Inertia::render('Calculator');
    })->name('calculator');
    
    Route::get('/student-loan-forgiveness', function() {
        return Inertia::render('StudentForgiveness');
    })->name('student.loan.forgiveness');
    
    Route::get('/frequently-asked-questions', function() {
        return Inertia::render('FAQPage');
    })->name('faq');
    
    Route::get('/how-it-works', function() {
        return Inertia::render('HowItWorks');
    })->name('howitworks');
    
    Route::get('/disability-discharge', function() {
        return Inertia::render('DisabilityDischarge');
    })->name('disability-discharge');
    
    Route::get('/borrower-defense-program', function() {
        return Inertia::render('BorrowerDefence');
    })->name('borrower-defense-program');
    
    Route::get('/client-reviews', function() {
        return Inertia::render('Reviews');
    })->name('client-reviews');
    
    Route::get('/speak-to-an-advisor', function() {
        return Inertia::render('LeadPage');
    })->name('speak-to-an-adviser');

    Route::get('/privacy-policy', function() {
        return Inertia::render('Terms');
    })->name('privacy-policy');


    Route::post('/lead-store', [LeadController::class, 'store'])->name('lead.store');


    Route::get('/get-uploads/{filename}', [LeadController::class, 'getFile'])->name('get-file');

Route::group(['prefix' => "admin", "middleware"=> "auth"], function () {
    Route::get('/leads', [LeadController::class, 'index'])->name('leads');
    Route::get('/lead/export', [LeadController::class, 'export'])->name('leads.export');


    Route::get('/', function() {
        return Inertia::render('LeadPage');
    })->name('speak-to-an-adviser');

    Route::get("/site-settings", function() {

    })->name('site.settings');
});

require __DIR__.'/auth.php';
