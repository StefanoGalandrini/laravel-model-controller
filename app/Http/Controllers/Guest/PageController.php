<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function movies()
    {
        $moviesArray = Movie::all();
        dd($moviesArray);
        return view('movies', ['movies' => $moviesArray]);
    }
}
