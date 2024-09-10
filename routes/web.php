<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\category;
use App\Models\product;

    // user said

Route::get('/', function () {

    $allcat = category::all();
    return view('welcome',['allcat' => $allcat]);
});

    // admin said

Route::get('/dashboard', [dashboard::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/category',[dashboard::class, 'create']);

Route::post('/admin/category', [dashboard::class, 'stor'])->name('stor');

Route::get('/admin/category/{id}/update',[dashboard::class, 'show'])->name('upcat');
Route::put('/admin/category/{id}/update', [dashboard::class, 'update'])->name('update');

Route::delete('/admin/category/{id}/delete', [dashboard::class, 'delete'])->name( 'delete' );

Route::get('/admin/product', [ProductController::class,'create']);

Route::post('/admin/product', [ProductController::class,'store'])->name('storproduct');

Route::get('/admin/edit/{id}/product', [ProductController::class,'edit'])->name('editpro');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
