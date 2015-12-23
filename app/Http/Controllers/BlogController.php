<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function category($category,$subcategory)
    {
        return view('blog.category')
            ->with('category', $category)
            ->with('subcategory', $subcategory);
    }
}
