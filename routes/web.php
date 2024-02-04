<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\UploadController;

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

Route::get('/', [ContactUsController::class, 'home'])->name('home');

Route::get('/signup', [GroupController::class, 'signup'])->name('signup');

Route::get('/signup2', [LeaderController::class, 'signup2'])->name('signup2');

Route::get('/upload', [UploadController::class, 'upload'])->name('upload');

Route::post('/contactus', [ContactUsController::class, 'contactus'])->name('contactus');

Route::get('/adminpanel', [ContactUsController::class,'adminpanel' ])->name('adminpanel');

Route::post('/store', [GroupController::class,'store'])->name('store');

Route::post('/store2', [LeaderController::class,'store2'])->name('store2');

Route::post('/store3', [UploadController::class,'store3'])->name('store3');

Route::get('/detail', [ContactUsController::class,'detail' ])->name('detail');

Route::get('/login', [ContactUsController::class, 'login'])->name('login');

Route::get('/detail', [ContactUsController::class, 'detail'])->name('detail');

Route::delete('/delete/{id}', [ContactUsController::class, 'delete'])->name('delete');

Route::get('/profile', [ContactUsController::class, 'profile'])->name('profile');

Route::get('/notification', [ContactUsController::class, 'notification'])->name('notification');


// Route::get('/edits/{id}', [ContactUsController::class, 'edits'])->name('edits');

