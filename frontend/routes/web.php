<?php

use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'newsletterSubscribe'])
    ->name('newsletter.subscribe');
