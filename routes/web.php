<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

// Index
Route::get('/ideas', [IdeaController::class, 'index']);

// Create
Route::get('/ideas/create', [IdeaController::class, 'create']);

// Store
Route::post('/ideas', [IdeaController::class, 'store']);

// Show
// Route Model Binding -
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);

// Edit
// Route Model Binding -
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);

// Update
// Route Model Binding -
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);

// Destroy
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);

// Route Resource


Route::view('/about', 'about');

Route::view('/contact', 'contact');
