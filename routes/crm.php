<?php
use Illuminate\Support\Facades\Route;

// Dishes
use App\Http\Controllers\Crm\Dishes\AddDishesController;
use App\Http\Controllers\Crm\Dishes\IndexDishesController;
use App\Http\Controllers\Crm\Dishes\StoreDishesController;
use App\Http\Controllers\Crm\ShowAdminDashboardController;

// Ingredient Tags
use App\Http\Controllers\Crm\IngredientsTags\EditIngredientTagController;
use App\Http\Controllers\Crm\IngredientsTags\IndexIngredientTagController;
use App\Http\Controllers\Crm\IngredientsTags\UpdateIngredientTagController;

// Time Tags
use App\Http\Controllers\Crm\TimesTags\IndexTimeTagController;
use App\Http\Controllers\Crm\TimesTags\EditTimeTagController;
use App\Http\Controllers\Crm\TimesTags\UpdateTimeTagController;

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


Route::prefix('ingredient-tags')
    ->as('ingredient-tags.')
    ->group(function () {
        Route::get('', IndexIngredientTagController::class)->name('index');
        Route::get('{id}/edit', EditIngredientTagController::class)->name('edit');
        Route::post('{id}/update', UpdateIngredientTagController::class)->name('update');
    });

Route::prefix('time-tags')
    ->as('time-tags.')
    ->group(function () {
        Route::get('', IndexTimeTagController::class)->name('index');
        Route::get('{id}/edit', EditTimeTagController::class)->name('edit');
        Route::post('{id}/update', UpdateTimeTagController::class)->name('update');
    });

