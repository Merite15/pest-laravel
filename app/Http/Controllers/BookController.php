<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $req){
        auth()->user()->books()->create(['title', 'author', 'published_year', 'description', 'price', 'user_id']);

        return response()->json(['message' => 'Book created']);
    }
}
