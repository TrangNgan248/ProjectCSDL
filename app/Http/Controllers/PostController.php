<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('frontend.post', compact('categories'));
    }
}
