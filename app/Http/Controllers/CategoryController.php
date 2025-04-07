<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function welcome(){
        $categories = Category::all();
        return view('welcome',compact('categories'));
    }
}
