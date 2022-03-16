<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScientistController extends Controller
{
    public function index(){
        $scientists = Skientist::orderBy('name','desc')->get();
        return view('frontend.scientist', compact([
            'scientists'
        ]));
    }
}
