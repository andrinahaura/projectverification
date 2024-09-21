<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Models\User;

Route::get('/give-admin/{id}', function ($id) {
    $user = User::find($id);
    $user->assignRole('admin');

    return 'Role admin berhasil diberikan kepada ' . $user->name;
});



Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
});

// Route::middleware(['auth', 'role:user'])->group(function () {
//     // Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//     // Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
//     Route::post('/assign-admin/{id}', [UserController::class, 'assignAdminRole']);
// });

Route::middleware(['web', 'auth'])->group(function () {
    Route::post('/assign-admin/{id}', [UserController::class, 'assignAdminRole']);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
