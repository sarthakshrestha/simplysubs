<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/purchase-form', function (){
    return view('checkout');
});

Route::post('/add-product', [\App\Http\Controllers\SubscriptionController::class, 'store'])->name('admin');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::resource('/subscriptions', SubscriptionController::class);

Route::post('/admin/subscribe', [SubscriptionController::class, 'store'])->name('admin.subscribe');

Route::get('/subs', [SubscriptionController::class, 'index'])->name('subscriptions.index');

Route::prefix('admin')->group(function(){
    Route::put('/subscriptions/{subscription}', [AdminController::class, 'update'])->name('admin.subscriptions.update');
});

Route::get('/subscriptions/{id}/edit', [AdminController::class, 'editSubscription'])->name('admin.subscriptions.edit');

Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/updatesub/{id}', function ($id) {
    $subscription = App\Models\Subscription::findOrFail($id);
    return view('update', ['subscription' => $subscription]);
});

Route::put('/updatesub/{id}', [AdminController::class, 'updateSubscription'])->name('admin.subscriptions.update-subscription');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

