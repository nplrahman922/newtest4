<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // URL: domain-anda.com/admin/dashboard
    // Nama Route: admin.dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Anda bisa menambahkan route admin lainnya di sini
    // Contoh: Route::get('/users', ...)->name('users.index');

});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
