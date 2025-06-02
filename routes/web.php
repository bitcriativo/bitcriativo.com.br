<?php

use App\Http\Controllers\BlogController;
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

/** Route Blog */
Route::prefix('/blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
});

/** Route Landingpage */
Route::get('/links', function () {
    return view('landing_pages.linktree');
})->name('linktree');

/** Route Chat Request Quote */
Route::get('/solicitar-orcamento', function () {
    return view('website.chat_request_quote.index');
})->name('chat_request_quote');
