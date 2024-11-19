<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = movie::all();
        return view('index')->with('movies', $movies);
    }

    public function detail($id)
    {
        $movie = movie::find($id);
        return view('detail')->with('movie', $movie);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $req)
    {
        movie::create([
            'title' => $req->title,
            'rating' => $req->rating,
            'genre' => $req->genre,
            'date' => $req->date,
            'synopsis' => $req->synopsis
        ]);
        return redirect()->route('movie.index');
    }

    public function edit($id)
    {
        $movie = movie::find($id);
        return view('edit')->with('movie', $movie);
    }

    public function update($id, Request $req)
    {
        $movie = movie::find($id);
        $movie->update([
            'title' => $req->title,
            'rating' => $req->rating,
            'genre' => $req->genre,
            'date' => $req->date,
            'synopsis' => $req->synopsis
        ]);
        return redirect()->route('movie.detail', ['id' => $movie->id]);
    }

    public function delete($id)
    {
        $movie = movie::find($id);
        $movie->delete();
        return redirect()->route('movie.index');
    }
}
