<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Manga;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category)
    {
        $mangas = Manga::where('id_category', $category)->get();
        $selectedCategory = Category::find($category);
        
        return view('mangas.category', compact('mangas', 'selectedCategory'));
    }
}
