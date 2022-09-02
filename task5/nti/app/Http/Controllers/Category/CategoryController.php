<?php

namespace App\Http\Controllers\Category;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategory()
    {
        $category = DB::table('categories')
            ->select()
            ->get();
        return view('category.allcategory', compact('category'));
    }

    public function createcategory()
    {
        return view('category.create');
    }
}
