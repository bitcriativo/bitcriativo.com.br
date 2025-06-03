<?php

use Illuminate\Support\Facades\Route;

/** Architecture */
Route::prefix('/portfolio/arquitetura')->group(function () {
    Route::view('/arq-lab', 'portfolio.architecture.arq_lab.index')->name('portfolio.arq_lab');
});
