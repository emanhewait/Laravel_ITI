<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Postlab3Controller;
use App\Http\Controllers\PostController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get(
        '/dashboard',
        function () {
            return Inertia::render('Dashboard');
        }
    )->name('dashboard');
    Route::delete('/destroy/{id}', [Postcontroller::class, 'destroy'])->name('destroy');
    Route::get('/update/{id}', [Postcontroller::class, 'update'])->name('update');
    Route::put('/edit/{id}', [Postcontroller::class, 'edit'])->name('edit');
    Route::get('/create', [Postcontroller::class, 'create'])->name('create');
    Route::post('/store', [Postcontroller::class, 'store'])->name('store');
    Route::get('/show', [Postcontroller::class, 'index'])->name('showPosts');

    Route::get('/index', [Usercontroller::class, 'index'])->name('index');
    Route::get('/show/{id}', [Postlab3Controller::class, 'show'])->name('show');
});
