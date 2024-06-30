<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;


class FilmController extends Controller
{
    public function AddPopularMovies()
    {
        $apiKey = env('TMDB_API_KEY');
        $response = Http::get("https://api.themoviedb.org/3/movie/popular?api_key={$apiKey}");
        $films = $response->json()['results'];

        foreach ($films as $film) {
            Film::create([
                'title' => $film['title'],
                'release_date' => $film['release_date'],
            ]);
        }
    }
}
