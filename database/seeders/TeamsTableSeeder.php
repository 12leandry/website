<?php

namespace Database\Seeders;

use Faker\Factory;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $teams = [];

        for ($i = 0; $i < 10; $i++) {
            $team = [
                'id' => Uuid::uuid4()->toString(),
                'noms' => $faker->lastName,
                'prenoms' => $faker->firstName,
                'poste' => $faker->jobTitle,
                'image' => $faker->imageUrl(200, 200), // Génère une URL d'image aléatoire de taille 200x200 pixels
            ];

            $teams[] = $team;
        }

        // Parcours des équipes et insertion dans la table
        foreach ($teams as $team) {
            DB::table('teams')->insert($team);
        }
    }
}
