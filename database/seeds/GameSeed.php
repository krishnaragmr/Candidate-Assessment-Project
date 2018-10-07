<?php

use Illuminate\Database\Seeder;


class GameSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	  $today_date = date('Y-m-d H:i:s', time());
	    $items = [
            ['id' => 1, 'team1_id' => 1, 'team2_id' => 5, 'start_time' => $today_date , 'result1' =>null, 'result2' => null,],
            ['id' => 2, 'team1_id' => 2, 'team2_id' => 6, 'start_time' => $today_date, 'result1' => null, 'result2' => null,],
            ['id' => 3, 'team1_id' => 3, 'team2_id' => 7, 'start_time' => $today_date, 'result1' => null, 'result2' => null,],
            ['id' => 4, 'team1_id' => 4, 'team2_id' => 8, 'start_time' => $today_date, 'result1' => null, 'result2' => null,],

        ];

        foreach ($items as $item) {
            \App\Game::create($item);
        }
    }
}
