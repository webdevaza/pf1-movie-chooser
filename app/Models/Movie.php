<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'movieTitle',
        'year',
        'movieSource',
        'description',
        'moviePoster',
        'moviePosterExt',
        'points',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
