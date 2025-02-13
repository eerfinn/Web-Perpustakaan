<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create()
    {
        return view('book.create');
    }

    public function store(BookRequest $request)
    {
        $validated = $request->validated();
        echo "Data Buku yang Dikirim:";
        print_r($validated);
    }
}
