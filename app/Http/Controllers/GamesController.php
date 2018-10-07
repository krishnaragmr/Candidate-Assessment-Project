<?php

namespace App\Http\Controllers;

use App\Jobs\SendReminderEmail;
use App\Team;
use App\Game;
use Artisan;


class GamesController extends Controller
{

    public function index()
    {
        $games = Game::where('match_status','=','waiting')->get();
        $results = Game::where('match_status','!=','waiting')->get();

        return view('front.games', compact('games', 'results'));
    }

    public function start()
    {
        $id = 1;
        $game = Game::find($id);
        if($game)
        {
            $game->match_status='started';
            $game->save();
        }
        dispatch(new SendReminderEmail($game));

        $id = 2;
        $game = Game::find($id);
        if($game)
        {
            $game->match_status='started';
            $game->save();
        }
        dispatch(new SendReminderEmail($game));


        $id = 3;
        $game = Game::find($id);
        if($game)
        {
            $game->match_status='started';
            $game->save();
        }

        dispatch(new SendReminderEmail($game));
        
        $id = 4;
        $game = Game::find($id);
        if($game)
        {
            $game->match_status='started';
            $game->save();
        }
        dispatch(new SendReminderEmail($game));
        

        $games = Game::where('match_status','=','waiting')->get();
        $results = Game::where('match_status','!=','waiting')->get();

        return view('front.games', compact('games', 'results'));
    }

}
