<?php
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MvController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// Main Listings
Route::get('/', [ListingController::class, 'index']);
// All topic
Route::get('/listings/topic', [ListingController::class, 'topic']);

// All Mv
Route::get('/listings/mv', [ListingController::class, 'mv']);
Route::get('/listings/mv/{listing}', [ListingController::class, 'showmv']);

//user listing data
Route::get('/listings/user', [ListingController::class, 'userlist'])->middleware('auth');
// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//===================MV================================================================
// Route::get('/video', [MvController::class, 'mv']);
// Show Create Form
// Route::get('/mv/create', [MvController::class, 'create'])->middleware('auth');

// // Store Mv Data
// Route::post('mv/listings', [MvController::class, 'store'])->middleware('auth');

// // Show Edit Form
// Route::get('/mv/{listing}/edit', [MvController::class, 'edit'])->middleware('auth');

// // Update Mv
// Route::put('/mv/{listing}', [MvController::class, 'update'])->middleware('auth');

// // Delete Listing
// Route::delete('/mv/{listing}', [MvController::class, 'destroy'])->middleware('auth');

// // Manage Listings
// Route::get('/mv/manage', [MvController::class, 'manage'])->middleware('auth');

// // Single Listing
// Route::get('/mv/{listing}', [ListingController::class, 'show']);

// ======================================USER================================================================

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
