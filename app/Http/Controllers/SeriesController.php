<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Series;


class SeriesController extends Controller
{
    public function addPopularSeries()
    {
        $apiKey = env('TMDB_API_KEY');
        $response = Http::get("https://api.themoviedb.org/3/tv/popular?api_key={$apiKey}");
        $series = $response->json()['results'];

        foreach ($series as $seriesItem) {
            Series::create([
                'name' => $seriesItem['name'],
                'description' => $seriesItem['description'],
            ]);
        }
    }
}
