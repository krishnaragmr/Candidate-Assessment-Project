<?php

use Illuminate\Database\Seeder;

class TeamSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Golden State Warriors',],
            ['id' => 2, 'name' => 'Cleveland Cavaliers',],
            ['id' => 3, 'name' => 'Los Angeles Lakers',],
            ['id' => 4, 'name' => 'Dallas Mavericks',],
            ['id' => 5, 'name' => 'San Antonio Spurs ',],
            ['id' => 6, 'name' => 'New Orleans Pelicans',],
            ['id' => 7, 'name' => 'Memphis Grizzlies',],
            ['id' => 8, 'name' => 'Houston Rockets',],

        ];

        foreach ($items as $item) {
            \App\Team::create($item);
        }
    }
}
