<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/add-product', [\App\Http\Controllers\SubscriptionController::class, 'store'])->name('admin');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/subs', [SubscriptionController::class, 'index'])->name('subscriptions.index');

Route::get('/checkout', function(){
    return view('checkout');
});

Route::post('/admin/subscribe', [SubscriptionController::class, 'store'])->name('admin.subscribe');

Route::get('/updatesub/{id}', function ($id) {
    $subscription = App\Models\Subscription::findOrFail($id);
    return view('update', ['subscription' => $subscription]);
});

Route::put('/updatesub/{id}', [AdminController::class, 'updateSubscription'])->name('admin.subscriptions.update-subscription');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
