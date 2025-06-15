<?php

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/inspo', function () {
    return view('inspo');
});
Route::get('/inspo2', function () {
    return view('inspo2');
});
Route::get('/inspo3', function () {
    return view('inspo3');
});
Route::get('/inspo4', function () {
    return view('inspo4');
});
Route::get('/inspo5', function () {
    return view('inspo5');
});
Route::get('/inspo6', function () {
    return view('inspo6');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
