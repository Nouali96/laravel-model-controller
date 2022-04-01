<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function index() {
        
        $movies =  Movie::where('vote', '>', 9)->get();
        return view('index', compact('movies'));
    }
}
