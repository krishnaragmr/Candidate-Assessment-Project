<?php

namespace App\Jobs;

use App\Game;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendReminderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected  $game;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($game)
    {
        //
        $this->game = $game;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $id = $this->game->id;
        for($i=0;$i<48;$i++)   
        {		
            sleep(5);
            $game = Game::find($id);
            if($game)
            {
                $game->result1=$game->result1 + 5;
                $game->result2=$game->result2 + 10;
                $game->match_status='running';
                $game->save();
            }
        }
        $game = Game::find($id);
        if($game)
        {
            $game->match_status='finished';
            $game->save();
        }
    }
}
