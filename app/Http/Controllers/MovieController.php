<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Franchise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Movie::where('type', 'movie')->get();
        $serials = Movie::where('type', 'tv-series')->get();
        $cartoons = Movie::where('type', 'cartoon')->get();
        $anime = Movie::where('type', 'anime')->get();

        $allMovies = Movie::all();
        $randomMovie = $allMovies[rand(0, count($allMovies) - 1)];
        return view('home', [
            'films' => $films,
            'serials' => $serials,
            'cartoons' => $cartoons,
            'anime' => $anime,
            'randomMovie' => $randomMovie,
        ]);
    }

    public function list()
    {
        $franchises = Franchise::all();
        $genres = Genre::all();
        return view('add-movie', [
            'franchises' => $franchises,
            'genres' => $genres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'id_franchise' => 'required',
            'rating_imdb' => 'required',
            'rating_kp' => 'required',
            'poster' => 'required|file|mimes:jpeg,jpg,png,webp',
            'year' => 'required',
            'country' => 'required',
            'genre_id_one' => 'required',
            'genre_id_two' => 'nullable',
            'genre_id_three' => 'nullable',
            'budget' => 'required',
            'age' => 'required',
            'time' => 'required',
            'description' => 'required',
            'episodes' => 'required',
            'type' => 'required'
        ]);
        $file = $request->file('poster');

        Storage::disk('public')->putFileAs($file, $file->getClientOriginalName());

        Movie::create([
            'poster' => 'uploads/' . $file->getClientOriginalName(),
        ] + $request->all());
        return back()->with('success', 'Фильм успешно добавлен.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $movie = Movie::select('movies.*', 'genre_one.name as genre_one', 'genre_two.name as genre_two', 'genre_three.name as genre_three')
                    ->leftJoin('genres as genre_one', 'movies.genre_id_one', '=', 'genre_one.id')
                    ->leftJoin('genres as genre_two', 'movies.genre_id_two', '=', 'genre_two.id')
                    ->leftJoin('genres as genre_three', 'movies.genre_id_three', '=', 'genre_three.id')
                    ->where(['movies.id' => $request->movie])->first();
        return view('movie', [
            'movie' => $movie
        ]);
    }

    public function showType(Request $request)
    {
        $movies = Movie::where(['type' => $request->type])->get();
        return view('type', [
            'type' => $request->type,
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
