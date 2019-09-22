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

    public function store(Request $request)
    {
        $response = ['status' => 'error'];

        $joke = Joke::create(['joke' => $request->joke]);

        $response = ['status' => 'success', 'data' => $joke];

        return $response;
    }

    public function delete(Request $request)
    {
        $response = ['status' => 'error'];

        Joke::destroy($request->joke_id);

        $response = ['status' => 'success'];

        return $response;
    }
}
