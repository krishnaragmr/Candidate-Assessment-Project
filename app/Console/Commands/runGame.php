<?php
namespace App\Console\Commands;

use App\Game;
use Illuminate\Console\Command;

class runGame extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
	protected $signature = 'run:game
		                        {game : The ID of the user}
				';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run Game';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $id = $this->argument('game');
        for($i=0;$i<48;$i++)   
        {		
            sleep(5);
            $game = Game::find($id);
            if($game)
            {
                $game->result1=$game->result1 + 100;
                $game->result2=$game->result2 + 80;
                $game->save();
            }
        }

    
	    $this->info("succ");

    }

}
