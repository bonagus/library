<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    
    public function index()
    {
        // return view('category.index', [
        //     'title'     => 'Category',
        //     'pretitle'  => 'Show'
        // ]); 
        return view('category.index', [
            'categories' => Category::get(),
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
            'name' => ['required', 'min:5'],
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        session()->flash('success', 'Category added successfully.');
 
        return redirect()->route('category.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('category.edit', [
            'category' => Category::find($id),
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'min:5', Rule::unique('categories', 'slug')->ignore($id)],
        ]);

        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        session()->flash('success', 'Category updated.');

        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        session()->flash('danger', 'Data deleted!');

        return redirect()->route('category.index');
    }
}
