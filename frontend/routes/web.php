<?php

use App\Http\Controllers\FormContactController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'newsletterSubscribe'])
    ->name('newsletter.subscribe');

Route::post('/form/contact', [FormContactController::class, 'submitFormContact'])
    ->name('forms.contact.submit');
