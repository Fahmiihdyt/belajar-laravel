<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BorrowingController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('books', BookController::class);

    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/members', [MemberController::class, 'index']);
    Route::get('/members/create', [MemberController::class, 'create'])
        ->name('members.create');
    Route::post('/members', [MemberController::class, 'store'])
        ->name('members.store');
    Route::get('/members/{member}/edit', [MemberController::class, 'edit'])
        ->name('members.edit');
    Route::put('/members/{member}', [MemberController::class, 'update'])
        ->name('members.update');
    Route::delete('/members/{member}', [MemberController::class, 'destroy'])
        ->name('members.destroy');
    Route::get('/borrowings', [BorrowingController::class, 'index'])
        ->name('borrowings.index');
    Route::get('/borrowings/create', [BorrowingController::class, 'create'])
        ->name('borrowings.create');
    Route::post('/borrowings', [BorrowingController::class, 'store'])
        ->name('borrowings.store');
    Route::post('/borrowings/{id}/return', [BorrowingController::class, 'returnBook'])
        ->name('borrowings.return');
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::middleware(['auth', 'can:manage-users'])
    ->group(function () {
        Route::resource('users', UserController::class);
    });

