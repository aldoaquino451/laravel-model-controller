<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function catalogue() {
        $movies = Movie::all();
        return view('catalogue', compact('movies') );
    }

    public function details($id) {
        $movie = Movie::find($id);
        return view('details', compact('movie'));
    }
}
