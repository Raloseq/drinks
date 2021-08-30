<?php

use App\Http\Controllers\DrinkController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\UserDrinksController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    // PROFILE
    Route::get('profile', [UserProfileController::class,'index'])->name('profile');
    Route::get('profile/edit', [UserProfileController::class,'edit'])->name('profile.edit');
    Route::post('profile/update', [UserProfileController::class, 'update'])->name('profile.update');
    // USER DRINKS
    Route::get('profile/drinks', [UserDrinksController::class,'index'])->name('profile.drinks');
    // DRINKS
    Route::get('drinks', [DrinkController::class,'index'])->name('drinks');
    Route::get('drinks/create', [DrinkController::class,'create'])->name('drinks.create');
    Route::get('drinks/{drink}', [DrinkController::class,'show'])->name('drinks.show');
    Route::post('drinks', [DrinkController::class,'store'])->name('drinks.store');
    Route::get('drinks/edit/{drink}',[DrinkController::class,'edit'])->name('drinks.edit');
    // INGREDIENTS
    Route::get('ingredients', [IngredientController::class,'index'])->name('ingredients');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();

