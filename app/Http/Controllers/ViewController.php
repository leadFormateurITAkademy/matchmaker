<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class ViewController extends Controller
{
    public function show()
    {
      $users = User::all();
      return view('show', [
        'users' => $users,
      ]);
    }
    public function match()
    {
      // Matcher chaque user a un autre user selon des criteres
      // Definis par vous
      // Ex : age le plus proche
      // Ex : Poids / taille le plus proche
      // Ex : Hobbies en communs

      // on prend le premier element, puis on parcourt l'array
      // pour trouver le premier element avec un age superieur
      $result = [];
      $users = User::all();
      foreach ($users as $key => $user) {
        $age = $user->age;
        foreach ($users as $altKey => $altUser) {
          if($user->id !== $altUser->id && $user->age > $altUser->age) {
            $result[] = [
                $user,
                $altUser,
              ];
          }
        }
      }
      dd($result);
      $example = [
        [
          "user1" => [],
          "user2" => []
        ],
        [
          "user3" => [],
          "user4" => []
        ]
      ];
      return view('match', []);
    }
}
