<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('http://api.themoviedb.org/3/movie/popular?api_key=d41159700e14d44ceb8c9c5895ae92de')
            ->json()["results"];

        // dd($popularMovies);
        // dump($popularMovies);

        $nowPlaying = Http::withToken(config('services.tmdb.token'))
            ->get('http://api.themoviedb.org/3/movie/now_playing?api_key=d41159700e14d44ceb8c9c5895ae92de')
            ->json()["results"];
        dump($nowPlaying);

        $genresArr = Http::withToken(config('services.tmdb.token'))
            ->get('http://api.themoviedb.org/3/genre/movie/list?api_key=d41159700e14d44ceb8c9c5895ae92de')
            ->json()["genres"];

        $genres = collect($genresArr)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
        // dump($genres);

        return view('index', [
            'popularMovies' => $popularMovies,
            'nowPlaying' => $nowPlaying,
            'genres' => $genres,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
