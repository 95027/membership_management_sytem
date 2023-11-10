<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('home', [HomeController::class, 'home'])->middleware('auth')->name('home');

Route::get('create', [MembershipController::class, 'create'])->middleware('auth')->name('create');

Route::post('store', [MembershipController::class, 'store'])->middleware('auth')->name('store');

Route::get('edit/{id}', [MembershipController::class, 'edit'])->middleware('auth')->name('edit');

Route::post('update', [MembershipController::class, 'update'])->middleware('auth')->name('update');

Route::get('delete/{id}', [MembershipController::class, 'delete'])->middleware('auth')->name('delete');

// for excel and pdf
Route::get('export',[HomeController::class, 'export'])->name('export');
Route::get('pdf',[HomeController::class, 'pdf'])->name('pdf');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
