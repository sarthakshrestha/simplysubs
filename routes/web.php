<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;


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

//Route::get('/subs', function(){
//    return view('subs');
//});

Route::get('/login', function(){
    return view('login');
});

//Route::get('/subs', function(){
//    return view('subs');
//});

Route::get('/purchase-form', function (){
    return view('checkout');
});

Route::post('/add-product', [\App\Http\Controllers\SubscriptionController::class, 'store'])->name('admin');

//Route::get('/admin', function(){
//    return view('admin');
//});

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::post('/admin/subscribe', [SubscriptionController::class, 'store'])->name('admin.subscribe');

Route::get('/subs', [SubscriptionController::class, 'index'])->name('subscriptions.index');

// Route for storing subscriptions
Route::post('/add-form', [SubscriptionController::class, 'store'])->name('admin.store');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

