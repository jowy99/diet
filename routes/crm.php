<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Crm\ShowAdminDashboardController;
use App\Http\Controllers\Crm\Tags\IndexTagsController;

Route::middleware('admin')
    ->group(function () {
        Route::get('/', ShowAdminDashboardController::class)->name('crm');
    });

Route::prefix('tags')
    ->as('tags.')
    ->group(function () {
        Route::get('', IndexTagsController::class)->name('index');
    });

