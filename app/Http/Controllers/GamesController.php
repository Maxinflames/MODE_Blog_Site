<?php

namespace App\Http\Controllers;

use App\Game;

class GamesController extends Controller
{
    public function show()
    {
        $games = Game::all();

        return view('games.show', compact('games'));
    }
}
