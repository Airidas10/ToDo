<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Joke;

class JokesController extends Controller
{
    public function index()
    {
        $jokes = Joke::all();

        return view('welcome', compact('jokes'));
    }
}
