<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Add form
    public function add ()
    {
        return view('movies.add-movie');
    }

    // Store movie
    public function store (Request $request) 
    {
        $movieForm = $request->validate([
            'movieTitle' => 'required',
            'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'movieSource' => 'url|nullable',
            'description' => 'required',
            'moviePoster' => 'nullable',
            'moviePosterExt' => 'url|nullable',
        ]);

        $movieForm['user_id']= auth()->user()->id;

        $movie = Movie::create($movieForm);

        return redirect('/')->with('message', $movie->movieTitle.' has successfully been added.');
    }
}
