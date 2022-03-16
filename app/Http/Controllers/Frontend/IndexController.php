<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skientist;
use App\Models\Book;
use App\Models\Category;
use App\Models\Article;

class IndexController extends Controller
{
    public function index(){
        $books = Book::orderBy('title', 'desc')->limit(20)->get();
        $scientists = Skientist::orderBy('name','desc')->limit(12)->get();
        $articles = Article::orderBy('title','desc')->limit(3)->get();
        return view('frontend.index', compact([
            'books',
            'scientists',
            'articles'
        ]));
    }
}
