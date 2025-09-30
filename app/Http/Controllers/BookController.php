<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title'  => 'required|max:150',
            'author' => 'required|max:100',
            'year'   => 'nullable|integer|max:' . date('Y'),
        ]);


        // Simpan data ke database
        \App\Models\Book::create([
            'title'  => $request->title,
            'author' => $request->author,
            'year'   => $request->year,
        ]);

        // Redirect kembali ke index dengan pesan sukses
        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function show($id)
    {
        // Cari buku berdasarkan id
        $book = \App\Models\Book::findOrFail($id);

        // Kirim ke view
        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = \App\Models\Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'  => 'required|max:150',
            'author' => 'required|max:100',
            'year'   => 'nullable|integer|max:' . date('Y'),
        ]);

        $book = \App\Models\Book::findOrFail($id);
        $book->update([
            'title'  => $request->title,
            'author' => $request->author,
            'year'   => $request->year,
        ]);

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $book = \App\Models\Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
    }
}
