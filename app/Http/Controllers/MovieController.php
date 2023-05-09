<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Watching;
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

    // Show all movies (searching is also here)
    public function index ()
    {
        if(request('search')) {
            $movies = Movie::where('movieTitle', 'like' , '%'.request('search').'%')
                            ->orWhere('description', 'like' , '%'.request('search').'%')                
                            ->orWhere('year', 'like' , '%'.request('search').'%')                
                            ->orWhere('movieSource', 'like' , '%'.request('search').'%')                
                            ->orWhere('points', 'like' , '%'.request('search').'%')                
                            ->simplePaginate(12);
        } else {
            $movies = Movie::simplePaginate(12);
        }

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

        if (auth()->user()) {
            $watched = Watching::where('movie_id',$movie->id)->where('user_id', auth()->user()->id)->first();

            $movie['watching'] = $watched ? $watched->id : 'not yet';
        }
        return response()->view('movies.movie', ['movie' => $movie]);
    }

    // Show a random movie
    public function random ()
    {
        $newRandMovie = Movie::query()->inRandomOrder()->first();

        if (auth()->user()) {
            $watchedMovies = Watching::where('user_id', auth()->user()->id)->get('movie_id');

            $unwatchedMovies = Movie::whereNotIn('id', $watchedMovies)->get();

            $newRandMovie = $unwatchedMovies->random();

            $newRandMovie['watching'] = 'not yet';
            
        }

        return response()->view('movies.movie', ['movie' => $newRandMovie]);
    }

    // Show a random movie from the watched
    public function watchedRandom ()
    {
        $watchedMovies = Watching::where('user_id', auth()->user()->id)->get();
        
        if(count($watchedMovies) < 1) {
            return redirect('/')->with('message', 'You haven\'t watched any movie yet.');
        } 
        elseif(count($watchedMovies) == 1) {
            $randId = $watchedMovies[0]->movie_id;
            
            return redirect()->route('movie', $randId)->with('message', 'You have watched only this movie.');
        }

        $randId = $watchedMovies->random()->movie_id;

        $watchedRandMovie = Movie::firstWhere('id',$randId);
        
        return response()->view('movies.movie', ['movie' => $watchedRandMovie]);
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
