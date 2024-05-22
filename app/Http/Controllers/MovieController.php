<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Movie = Movie::paginate(25);
        return view('index', [ 
            'movie' => $Movie
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $data = $request->all();
        $newMovie = new Movie();
        $newMovie->name = $data['name'];
        $newMovie->description = $data['description'];
        $newMovie->year = $data['year'];
        $newMovie->rate = $data['rate'];
        $newMovie->img = $data['img'];
        $newMovie->user_id = $request->user()->id;
        $newMovie->save();
        return redirect()->route('movie.index')->with('operation_success','Movie Add');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $Movie = Movie::findOrFail($movie->id);

        return view('show', [
            'movie' => $Movie

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $movie = Movie::findOrFail($movie->id);
        if(Auth::user()->id !== $movie->user_id) abort(401);
        return view('edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $data = $request->all();
        $movie = Movie::findOrFail($movie->id);
        if(Auth::user()->id !== $movie->user_id) abort(401);

      
        $movie->name = $data['name'];
        $movie->description = $data['description'];
        $movie->year = $data['year'];
        $movie->rate = $data['rate'];
        $movie->img = $data['img'];
        $movie->user_id = $request->user()->id;
        $movie->update();

        // ridirezionare
        return redirect()->route('movie.show', ['movie' => $movie->id])->with('operation_success','Movie upgrade');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $Books = Movie::findOrFail($movie->id);
        $Books->delete();
        return redirect()->route('movie.index')->with('operation_success','Movie deleted');
    }
}
