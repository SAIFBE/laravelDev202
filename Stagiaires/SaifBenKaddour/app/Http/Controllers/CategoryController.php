<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function AllProducts($id){
        $category =Category::find($id);;
        return view('products', compact('category'));
    }
}
