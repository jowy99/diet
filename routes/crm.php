<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Crm\ShowAdminDashboardController;

// Dishes
use App\Http\Controllers\Crm\Dishes\IndexDishesController;
use App\Http\Controllers\Crm\Dishes\AddDishesController;
use App\Http\Controllers\Crm\Dishes\StoreDishesController;

// Tags
use App\Http\Controllers\Crm\Tags\IndexTagsController;
use App\Http\Controllers\Crm\Tags\EditTagController;
use App\Http\Controllers\Crm\Tags\UpdateTagController;

Route::middleware('admin')
    ->group(function () {
        Route::get('/', ShowAdminDashboardController::class)->name('crm');
    });

Route::prefix('dishes')
    ->as('dishes.')
    ->group(function () {
        Route::get('', IndexDishesController::class)->name('index');
        Route::get('add', AddDishesController::class)->name('add');
        Route::post('store', StoreDishesController::class)->name('store');
    });


Route::prefix('tags')
    ->as('tags.')
    ->group(function () {
        Route::get('', IndexTagsController::class)->name('index');
        Route::get('{id}/edit', EditTagController::class)->name('edit');
        Route::post('{id}/update', UpdateTagController::class)->name('update');
    });

