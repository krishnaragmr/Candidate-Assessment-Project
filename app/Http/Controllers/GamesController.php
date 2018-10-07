<?php

namespace App\Http\Controllers;

use App\Team;
use App\Game;
use Artisan;


class GamesController extends Controller
{

    public function index()
    {
        $games = Game::whereNull('result1')->get();
        $results = Game::whereNotNull('result1')->get();

        return view('front.games', compact('games', 'results'));
    }

    public function start()
    {
        $teams = Team::all()->sortByDesc('points');

        Artisan::queue('run:game',[
			    'game' => 1
            ]);
       
        Artisan::call('run:game',[
			    'game' =>2 
			]);
        Artisan::call('run:game',[
			    'game' =>3 
			]);
        Artisan::call('run:game',[
			    'game' =>4 
            ]);
        
        return view('front.table', compact('teams'));
    }

}
