<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skientist;
use App\Models\Book;
use App\Models\Category;
use App\Models\Article;


class HomeController extends Controller
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
    public function scientists(){
        return view('frontend.scientists',[
            'scientists'=>Skientist::orderBy('name','asc')->paginate(1),
        ]);
    }
    
    public function scientist($id){
        return view('frontend.scientist',[
            'scientist'=>Skientist::findOrFail($id),
        ]);
    }

    public function books(){
        return view('frontend.books',[
            'categories'=>Category::orderBy('title','asc')->get(),
            'books'=>Book::orderBy('title','asc')->get(),
        ]);
    }

    public function book($id){
        return view('frontend.book',[
            'book'=>Book::findOrFail($id),
        ]);
    }

    public function articles(){
        return view('frontend.articles',[
            'articles'=>Article::orderBy('title', 'asc')->get(),
        ]);
    }

    public function article($id){
        return view('frontend.article',[
            'article'=>Article::findOrFail($id),
        ]);
    }

    public function categories(){
        return view('frontend.categories', [
            'categories'=>Category::orderBy('title', 'asc')->get(),
        ]);
    }

    public function category($id){
        return view('frontend.category', [
            'category'=>Category::findOrFail($id),
        ]);
    }
}
