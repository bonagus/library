<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    
    public function index()
    {
        return view('book.index', [
            'book' => Book::where('user_id', auth()->id())->get(),
        ]);
    }
    
    public function create()
    {
        return view('book.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required'],
            'image' => ['required', 'image'],
            'body' => ['required', 'min:20'],
        ]);

        Book::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'image' => $request->file('image')->store('post/image/'),
            'body' => $request->body,
        ]);
 
        return redirect()->route('post.index');

    }
    
    public function show($id)
    {
    //
    }
    
    public function edit($id)
    {
    //
    }

    public function update(Request $request, $id)
    {
    //
    }
    
    public function destroy($id)
    {
    //
    }

}
