<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Crm\ShowAdminDashboardController;

Route::middleware('admin')
    ->group(function () {
        Route::get('/', ShowAdminDashboardController::class)->name('crm');
    });
