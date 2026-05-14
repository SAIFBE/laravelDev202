<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
    $categories = Category::all();
    return view('categories', compact('categories'));
});

Route::get('/category/{id}', [CategoryController::class, 'AllProducts']);
