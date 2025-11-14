<?php

use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PropertyImagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.dashboard');
});
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
Route::get('/sales/{id}/deed', [SalesController::class, 'generateDeed'])->name('properties.deed');



// --- PROPERTIES ROUTE ---
Route::get('/properties', [PropertiesController::class, 'index'])->name('properties.index');
Route::get('/properties/create',[PropertiesController::class, 'create'])->name('properties.create');
Route::post('/properties/store',[PropertiesController::class, 'store'])->name('properties.store');
Route::get('/properties/sell', [SalesController::class, 'create'])->name('sales.create');
Route::get('/property/{id}/details', [PropertiesController::class, 'fetchDetails']);
Route::delete('/properties/{id}',[PropertiesController::class, 'destroy'])->name('properties.destroy');
Route::get('/properties/{id}', [PropertiesController::class, 'show'])->name('properties.show');
Route::get('/properties/{id}/edit', [PropertiesController::class, 'edit'])->name('properties.edit');


// --- IMAGES ROUTE ---
Route::get('/images/create', [PropertyImagesController::class, 'create'])->name('images.create');
Route::resource('/images', PropertyImagesController::class)->except(['update', 'edit']);
// Route::resource('/images', PropertyImagesController::class)->only(['index', 'show', 'destroy']);


Route::post('/sales/store',[SalesController::class, 'store'])->name('sales.store');




Route::get('/projects/create', function () {
    return view('admin.pages.projects.create');
});
Route::get('/projects', function () {
    return view('admin.pages.projects.index');
});
Route::get('/messages', function () {
    return view('admin.pages.messages.index');
});
Route::get('/messages/show', function () {
    return view('admin.pages.messages.show');
});
Route::get('/login', function () {
    return view('authentication');
});
Route::get('/employees', function () {
    return view('employees');
});


// --- USERS ROUTE ---
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

// TENANTS ROUTE
Route::get('/tenants', [TenantController::class, 'index'])->name('tenants.index');
Route::get('/tenants/create', [TenantController::class, 'create'])->name('tenants.create');
Route::post('/tenants/store', [TenantController::class, 'store'])->name('tenants.store');

// RENTALS Route
Route::get('/rental', [RentalsController::class, 'index'])->name('rentals.index');
Route::get('/rental/create', [RentalsController::class, 'create'])->name('rentals.create');
Route::post('/rental/store', [RentalsController::class, 'store'])->name('rentals.store');
// MATERIALs Route
Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
Route::get('/materials/create', [MaterialController::class, 'create'])->name('materials.create');
Route::post('/materials/store', [MaterialController::class, 'store'])->name('materials.store');

// RECIPE Route


Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/recipes/store', [RecipeController::class, 'store'])->name('recipes.store');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');
Route::delete('/recipes/{id}', [RecipeController::class, 'destroy'])->name('recipes.destroy');
Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');


Route::get('/employees/create', function () {
    return view('create-employee');
});


