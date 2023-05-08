<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    // Show all movies
    public function index ()
    {
        $movies = Movie::simplePaginate(12);

        return response()->view('movies.movies', ['movies' => $movies]);
    }

    // Show all MY movies
    public function mymovies ()
    {
        $mymovies = Movie::where('user_id', auth()->user()->id)->simplePaginate(12);

        return response()->view('movies.movies', ['movies' => $mymovies]);
    }

    // Show a particular movie
    public function show(string $id)
    {
        $movie = Movie::find($id);

        return response()->view('movies.movie', ['movie' => $movie]);
    }

    // Show a random movie
    public function random ()
    {
        $randMovie = DB::table('movies')->inRandomOrder()->first();

        return response()->view('movies.movie', ['movie' => $randMovie]);
    }

    // Movie edit page
    public function edit (Movie $movie)
    {
        return response()->view('movies.edit-movie', ['movie' => $movie]);
    }

    // Movie update
    public function update (Request $request, Movie $movie)
    {
        $movieEditForm = $request->validate([
            'movieTitle' => 'required',
            'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'movieSource' => 'url|nullable',
            'description' => 'required',
            'moviePoster' => 'nullable',
            'moviePosterExt' => 'url|nullable',
        ]);

        $movie->update($movieEditForm);

        return redirect('/')->with('message', $movie->movieTitle.' updated successfully.');
    }

    // Delete a movie
    public function destroy (Movie $movie)
    {
        $movie->delete();

        return redirect('/')->with('message', $movie->movieTitle.' deleted successfully.');
    }
}
