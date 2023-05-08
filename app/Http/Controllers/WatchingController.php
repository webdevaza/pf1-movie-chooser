<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Watching;
use Illuminate\Http\Request;

class WatchingController extends Controller
{
    // Watch a movie
    public function store(Movie $movie)
    {
        Watching::create([
            'user_id' => auth()->user()->id,
            'movie_id' => $movie->id
        ]);
        
        return redirect('movies/'.$movie->id);
    }

    // Unwatch a movie
    public function destroy(Movie $movie)
    {
        Watching::where('movie_id', $movie->id)
                ->where('user_id', auth()->user()->id)
                ->delete();
        
        return redirect('movies/'.$movie->id);
    }
}
