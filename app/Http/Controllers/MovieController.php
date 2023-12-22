<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Franchise;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Movie::where('type', 'movie')->get();
        return view('home', [
            'films' => $films
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
            'trailer' => 'required',
            'video' => 'required',
            'episodes' => 'required',
            'type' => 'required'
        ]);
        $path = $request->poster->store('image', 'public');
        Movie::create([
            'poster' => $path
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
    public function show(string $id)
    {
        //
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
