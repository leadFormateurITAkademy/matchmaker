<?php

use Illuminate\Database\Seeder;

class HobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     // 9
    public function run()
    {
      DB::table('hobbies')->insert([
        [
          'content' => 'les balades dans la nature',
        ],
        [
          'content' => 'les alpagas',
        ],
        [
          'content' => 'la nourriture',
        ],
        [
          'content' => "l'alcool",
        ],
        [
          'content' => 'la mort',
        ],
        [
          'content' => 'la drogue',
        ],
        [
          'content' => 'le sommeil',
        ],
        [
          'content' => 'le travail',
        ],
        [
          'content' => 'le développement Full-Stack',
        ],
      ]);
    }
}
