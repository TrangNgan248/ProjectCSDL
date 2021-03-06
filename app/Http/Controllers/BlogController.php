<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $pageNumber = 15;
        // $blogs = Blog::paginate($pageNumber);
        $categories = Category::orderBy('created_at', 'desc')->get();
        foreach ($categories as $category){
            $category->list_blog = $category->blogs->take(4);
            foreach ($category->list_blog as $item)
            {
                $item->author_info = $item->author;
            }
        }
        //dd($categories[0]->cat_name);
        // return view('frontend.home', ['blogs'=>$blogs]);
        return view('frontend.home', compact('categories'));
    }
}
