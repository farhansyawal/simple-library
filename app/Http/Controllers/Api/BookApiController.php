<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookApiController extends Controller
{
    public function index()
    {
        return response()->json(Book::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required|max:150',
            'author' => 'required|max:100',
            'year'   => 'nullable|integer|max:' . date('Y'),
        ]);

        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'  => 'required|max:150',
            'author' => 'required|max:100',
            'year'   => 'nullable|integer|max:' . date('Y'),
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return response()->json($book, 200);
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json(null, 204);
    }
}
