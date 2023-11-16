<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Dishes
use App\Http\Controllers\Crm\Dishes\AddDishesController;
use App\Http\Controllers\Crm\Dishes\IndexDishesController;
use App\Http\Controllers\Crm\Dishes\StoreDishesController;
use App\Http\Controllers\Crm\ShowAdminDashboardController;
use App\Http\Controllers\Crm\Dishes\DetailsDishesController;
use App\Http\Controllers\Crm\Dishes\EditDishesController;
use App\Http\Controllers\Crm\Dishes\UpdateDishesController;

// Ingredient Tags
use App\Http\Controllers\Crm\IngredientsTags\EditIngredientTagController;
use App\Http\Controllers\Crm\IngredientsTags\IndexIngredientTagController;
use App\Http\Controllers\Crm\IngredientsTags\UpdateIngredientTagController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/dashboard', ShowAdminDashboardController::class)->name('verified');

Route::get('/user', function () {
    return view('profile');
})->name('user');

Route::prefix('dishes')
    ->as('dishes.')
    ->group(function () {
        Route::get('', IndexDishesController::class)->name('index');
        Route::get('add', AddDishesController::class)->name('add');
        Route::post('store', StoreDishesController::class)->name('store');
        Route::get('{id}/details', DetailsDishesController::class)->name('details');
        Route::get('{id}/edit', EditDishesController::class)->name('edit');
        Route::post('{id}/update', UpdateDishesController::class)->name('update');
    });


Route::prefix('ingredient-tags')
    ->as('ingredient-tags.')
    ->group(function () {
        Route::get('', IndexIngredientTagController::class)->name('index');
        Route::get('{id}/edit', EditIngredientTagController::class)->name('edit');
        Route::post('{id}/update', UpdateIngredientTagController::class)->name('update');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
