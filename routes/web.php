<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Create additional Routes below'

// Route for displaying the form to add a new property
Route::get('/properties/create', [PropertyController::class, 'createForm'])->name('properties.create');

// Route for displaying a list of all properties
Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');

// Route for viewing an individual property by the specific property id
Route::get('/properties/{property_id}', [PropertyController::class, 'show'])->name('properties.show');