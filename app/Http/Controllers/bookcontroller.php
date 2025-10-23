<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.ashu');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'          => 'nullable',
            'author'         => 'nullable',
            'publisher'      => 'nullable',
            'book_published' => 'required|integer',
            'book_price'     => 'required|integer',
            'author_picture' => 'required|image|mimes:jpeg,jpg,png,pdf|max:2048'
        ]);

        $filepath = null;
        if ($request->hasFile('author_picture')) {
            $filepath = $request->file('author_picture')->store('author', 'public');
        }

        Book::create([
            'title'          => $request->title,
            'author'         => $request->author,
            'publisher'      => $request->publisher,
            'book_published' => $request->book_published,
            'book_price'     => $request->book_price,
            'author_picture' => $filepath
        ]);

        return redirect()->route('books.index')->with('success', 'Book record added successfully');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title'          => 'required',
            'author'         => 'required',
            'publisher'      => 'required',
            'book_published' => 'required|integer',
            'book_price'     => 'required|integer',
            'author_picture' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $filepath = $book->author_picture; // keep old image if no new one uploaded
        if ($request->hasFile('author_picture')) {
            $filepath = $request->file('author_picture')->store('author', 'public');
        }

        $book->update([
            'title'          => $request->title,
            'author'         => $request->author,
            'publisher'      => $request->publisher,
            'book_published' => $request->book_published,
            'book_price'     => $request->book_price,
            'author_picture' => $filepath
        ]);

        return redirect()->route('books.index')->with('success', 'Book record updated successfully');
    }

    public function destroy(Book $book)
    { 
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book record deleted successfully');
    }
}
