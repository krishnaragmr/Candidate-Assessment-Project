<?php

use Illuminate\Database\Seeder;

class PlayerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $items = [

		 ['id' => 1, 'team_id' => 2, 'name' => 'Justin Anderson', 'surname' => 'Justin Anderson', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 2, 'team_id' => 2, 'name' => 'Tyler Dorsey', 'surname' => 'Tyler Dorsey', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 3, 'team_id' => 2, 'name' => 'Kevin Huerter', 'surname' => 'Kevin Huerter', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 4, 'team_id' => 2, 'name' => 'RJ Hunter', 'surname' => 'RJ Hunter', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 5, 'team_id' => 2, 'name' => 'Daniel Hamilton', 'surname' => 'Daniel Hamilton', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 6, 'team_id' => 2, 'name' => 'Omari Spellman', 'surname' => 'Omari Spellman', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 7, 'team_id' => 2, 'name' => 'Jeremy Lin', 'surname' => 'Jeremy Lin', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 8, 'team_id' => 2, 'name' => 'Jaylen Adams', 'surname' => 'Jaylen Adams', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 9, 'team_id' => 2, 'name' => 'Trae Young', 'surname' => 'Trae Young', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 10, 'team_id' => 2, 'name' => 'Taurean Prince', 'surname' => 'Taurean Prince', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 11, 'team_id' => 2, 'name' => 'Dewayne Dedmon', 'surname' => 'Dewayne Dedmon', 'position' => 'F' , 'birth_date' => '',],


		 ['id' => 12, 'team_id' => 3, 'name' => 'Jordan McLaughlin', 'surname' => 'Jordan McLaughlin', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 13, 'team_id' => 3, 'name' => 'Rodions Kurucs', 'surname' => 'Rodions Kurucs', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 14, 'team_id' => 3, 'name' => 'D&#039;Angelo Russell', 'surname' => 'D&#039;Angelo Russell', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 15, 'team_id' => 3, 'name' => 'Jared Dudley', 'surname' => 'Jared Dudley', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 16, 'team_id' => 3, 'name' => 'Nuni Omot', 'surname' => 'Nuni Omot', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 17, 'team_id' => 3, 'name' => 'Spencer Dinwiddie', 'surname' => 'Spencer Dinwiddie', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 18, 'team_id' => 3, 'name' => 'DeMarre Carroll', 'surname' => 'DeMarre Carroll', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 19, 'team_id' => 3, 'name' => 'Theo Pinson', 'surname' => 'Theo Pinson', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 20, 'team_id' => 3, 'name' => 'Joe Harris', 'surname' => 'Joe Harris', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 21, 'team_id' => 3, 'name' => 'Shabazz Napier', 'surname' => 'Shabazz Napier', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 22, 'team_id' => 3, 'name' => 'Alan Williams', 'surname' => 'Alan Williams', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 23, 'team_id' => 3, 'name' => 'Ed Davis', 'surname' => 'Ed Davis', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 24, 'team_id' => 3, 'name' => 'Treveon Graham', 'surname' => 'Treveon Graham', 'position' => 'G' , 'birth_date' => '',],



		 ['id' => 25, 'team_id' => 4, 'name' => 'Daryl Macon', 'surname' => 'Daryl Macon', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 26, 'team_id' => 4, 'name' => 'J.J. Barea', 'surname' => 'J.J. Barea', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 27, 'team_id' => 4, 'name' => 'DeAndre Jordan', 'surname' => 'DeAndre Jordan', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 28, 'team_id' => 4, 'name' => 'Dwight Powell', 'surname' => 'Dwight Powell', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 29, 'team_id' => 4, 'name' => 'Yanyuhang Ding', 'surname' => 'Yanyuhang Ding', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 30, 'team_id' => 4, 'name' => 'Dorian Finney-Smith', 'surname' => 'Dorian Finney-Smith', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 31, 'team_id' => 4, 'name' => 'Codi Miller-McIntyre', 'surname' => 'Codi Miller-McIntyre', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 32, 'team_id' => 4, 'name' => 'Jalen Brunson', 'surname' => 'Jalen Brunson', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 33, 'team_id' => 4, 'name' => 'Jalen Jones', 'surname' => 'Jalen Jones', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 34, 'team_id' => 4, 'name' => 'Wesley Matthews', 'surname' => 'Wesley Matthews', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 35, 'team_id' => 4, 'name' => 'Ray Spalding', 'surname' => 'Ray Spalding', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 36, 'team_id' => 4, 'name' => 'Devin Harris', 'surname' => 'Devin Harris', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 37, 'team_id' => 5, 'name' => 'J.J. Barea', 'surname' => 'J.J. Barea', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 38, 'team_id' => 5, 'name' => 'DeAndre Jordan', 'surname' => 'DeAndre Jordan', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 39, 'team_id' => 5, 'name' => 'Dwight Powell', 'surname' => 'Dwight Powell', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 40, 'team_id' => 5, 'name' => 'Yanyuhang Ding', 'surname' => 'Yanyuhang Ding', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 41, 'team_id' => 5, 'name' => 'Dorian Finney-Smith', 'surname' => 'Dorian Finney-Smith', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 42, 'team_id' => 5, 'name' => 'Codi Miller-McIntyre', 'surname' => 'Codi Miller-McIntyre', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 43, 'team_id' => 5, 'name' => 'Jalen Brunson', 'surname' => 'Jalen Brunson', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 44, 'team_id' => 5, 'name' => 'Jalen Jones', 'surname' => 'Jalen Jones', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 45, 'team_id' => 5, 'name' => 'Wesley Matthews', 'surname' => 'Wesley Matthews', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 46, 'team_id' => 5, 'name' => 'Ray Spalding', 'surname' => 'Ray Spalding', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 47, 'team_id' => 5, 'name' => 'Devin Harris', 'surname' => 'Devin Harris', 'position' => 'G' , 'birth_date' => '',],



		 ['id' => 48, 'team_id' => 6, 'name' => 'Dennis Smith Jr.', 'surname' => 'Dennis Smith Jr.', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 49, 'team_id' => 6, 'name' => 'Daryl Macon', 'surname' => 'Daryl Macon', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 50, 'team_id' => 6, 'name' => 'J.J. Barea', 'surname' => 'J.J. Barea', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 51, 'team_id' => 6, 'name' => 'DeAndre Jordan', 'surname' => 'DeAndre Jordan', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 52, 'team_id' => 6, 'name' => 'Dwight Powell', 'surname' => 'Dwight Powell', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 53, 'team_id' => 6, 'name' => 'Yanyuhang Ding', 'surname' => 'Yanyuhang Ding', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 54, 'team_id' => 6, 'name' => 'Dorian Finney-Smith', 'surname' => 'Dorian Finney-Smith', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 55, 'team_id' => 6, 'name' => 'Codi Miller-McIntyre', 'surname' => 'Codi Miller-McIntyre', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 56, 'team_id' => 6, 'name' => 'Jalen Brunson', 'surname' => 'Jalen Brunson', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 57, 'team_id' => 6, 'name' => 'Jalen Jones', 'surname' => 'Jalen Jones', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 58, 'team_id' => 6, 'name' => 'Wesley Matthews', 'surname' => 'Wesley Matthews', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 59, 'team_id' => 6, 'name' => 'Ray Spalding', 'surname' => 'Ray Spalding', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 60, 'team_id' => 6, 'name' => 'Devin Harris', 'surname' => 'Devin Harris', 'position' => 'F' , 'birth_date' => '',],


		 ['id' => 61, 'team_id' => 7, 'name' => 'Jeff Teague', 'surname' => 'Jeff Teague', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 62, 'team_id' => 7, 'name' => 'Tyus Jones', 'surname' => 'Tyus Jones', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 63, 'team_id' => 7, 'name' => 'Jared Terrell', 'surname' => 'Jared Terrell', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 64, 'team_id' => 7, 'name' => 'Gorgui Dieng', 'surname' => 'Gorgui Dieng', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 65, 'team_id' => 7, 'name' => 'Jonathan Stark', 'surname' => 'Jonathan Stark', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 66, 'team_id' => 7, 'name' => 'James Nunnally', 'surname' => 'James Nunnally', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 67, 'team_id' => 7, 'name' => 'Luol Deng', 'surname' => 'Luol Deng', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 68, 'team_id' => 7, 'name' => 'C.J. Williams', 'surname' => 'C.J. Williams', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 69, 'team_id' => 7, 'name' => 'Darius Johnson-Odom', 'surname' => 'Darius Johnson-Odom', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 70, 'team_id' => 7, 'name' => 'Josh Okogie', 'surname' => 'Josh Okogie', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 71, 'team_id' => 7, 'name' => 'Andrew Wiggins', 'surname' => 'Andrew Wiggins', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 72, 'team_id' => 7, 'name' => 'Jimmy Butler', 'surname' => 'Jimmy Butler', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 73, 'team_id' => 8, 'name' => 'Jeff Teague', 'surname' => 'Jeff Teague', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 74, 'team_id' => 8, 'name' => 'Tyus Jones', 'surname' => 'Tyus Jones', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 75, 'team_id' => 8, 'name' => 'Jared Terrell', 'surname' => 'Jared Terrell', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 76, 'team_id' => 8, 'name' => 'Gorgui Dieng', 'surname' => 'Gorgui Dieng', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 77, 'team_id' => 8, 'name' => 'Jonathan Stark', 'surname' => 'Jonathan Stark', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 78, 'team_id' => 8, 'name' => 'James Nunnally', 'surname' => 'James Nunnally', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 79, 'team_id' => 8, 'name' => 'Luol Deng', 'surname' => 'Luol Deng', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 80, 'team_id' => 8, 'name' => 'C.J. Williams', 'surname' => 'C.J. Williams', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 81, 'team_id' => 8, 'name' => 'Darius Johnson-Odom', 'surname' => 'Darius Johnson-Odom', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 82, 'team_id' => 8, 'name' => 'Josh Okogie', 'surname' => 'Josh Okogie', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 83, 'team_id' => 8, 'name' => 'Andrew Wiggins', 'surname' => 'Andrew Wiggins', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 84, 'team_id' => 8, 'name' => 'Jimmy Butler', 'surname' => 'Jimmy Butler', 'position' => 'F' , 'birth_date' => '',],


		 ['id' => 85, 'team_id' => 1, 'name' => 'Jeff Teague', 'surname' => 'Jeff Teague', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 86, 'team_id' => 1, 'name' => 'Tyus Jones', 'surname' => 'Tyus Jones', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 87, 'team_id' => 1, 'name' => 'Jared Terrell', 'surname' => 'Jared Terrell', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 88, 'team_id' => 1, 'name' => 'Gorgui Dieng', 'surname' => 'Gorgui Dieng', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 89, 'team_id' => 1, 'name' => 'Jonathan Stark', 'surname' => 'Jonathan Stark', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 90, 'team_id' => 1, 'name' => 'James Nunnally', 'surname' => 'James Nunnally', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 91, 'team_id' => 1, 'name' => 'Luol Deng', 'surname' => 'Luol Deng', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 92, 'team_id' => 1, 'name' => 'C.J. Williams', 'surname' => 'C.J. Williams', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 93, 'team_id' => 1, 'name' => 'Darius Johnson-Odom', 'surname' => 'Darius Johnson-Odom', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 94, 'team_id' => 1, 'name' => 'Josh Okogie', 'surname' => 'Josh Okogie', 'position' => 'F' , 'birth_date' => '',],

		 ['id' => 95, 'team_id' => 1, 'name' => 'Andrew Wiggins', 'surname' => 'Andrew Wiggins', 'position' => 'G' , 'birth_date' => '',],

		 ['id' => 96, 'team_id' => 1, 'name' => 'Jimmy Butler', 'surname' => 'Jimmy Butler', 'position' => 'F' , 'birth_date' => '',],

        ];

        foreach ($items as $item) {
            \App\Player::create($item);
        }
    }
}
