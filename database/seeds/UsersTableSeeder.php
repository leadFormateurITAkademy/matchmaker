<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User as User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for ($i=0; $i < 26 ; $i++) {
        DB::table('users')->insert([
          "firstname" => $faker->firstname,
          "lastname" => $faker->lastname,
          "username" => $faker->userName,
          "email" => $faker->email,
          "height" => rand(150, 200),
          "weight" => rand(50, 120),
          "age" => rand(21, 80)
        ]);
        $vals = [];
        $randNum = rand(1, 6);
        for ($j=0; $j < $randNum ; $j++) {
          $vals[] = rand(1, 9);
        }
        $insertedUser = User::find(DB::getPdo()->lastInsertId());
        $insertedUser->hobbies()->sync($vals);
      }
    }








}
