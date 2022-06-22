<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        return view('category.index', [
            'title'     => 'Category',
            'pretitle'  => 'Show'
        ]);
        // return view('category.index', [
        //     'categories' => Category::whereNotNull('name')->get(),
        // ]);
    }
    
    public function create()
    {
        return view('category.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'slug' => ['required', 'min:5']
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug
        ]);
 
        return redirect()->route('category.index');

    }
}
