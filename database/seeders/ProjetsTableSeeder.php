<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projets = [
            [   
                'titre' => 'Projet 1',
                'sous_titre' => 'Sous-titre du projet 1',
                'service_id' => 1,
                'client_name' => 'DOVV',
                'projet_date' => '2023-02-12',
                'description' => 'Description du projet 1',
                'icone' => 'icone1.png',
            ],
            [
                'titre' => 'Projet 2',
                'sous_titre' => 'Sous-titre du projet 2',
                'service_id' => 2,
                'client_name' => 'Santa lucia',
                'projet_date' => '2023-03-12',
                'description' => 'Description du projet 2',
                'icone' => 'icone2.png',
            ],
            [
                'titre' => 'Projet 3',
                'sous_titre' => 'Sous-titre du projet 3',
                'service_id' => 3,
                'client_name' => 'Carrefour',
                'projet_date' => '2023-04-12',
                'description' => 'Description du projet 3',
                'icone' => 'icone3.png',
            ],
            [
                'titre' => 'Projet 4',
                'sous_titre' => 'Sous-titre du projet 4',
                'service_id' => 4,
                'client_name' => 'Facebook',
                'projet_date' => '2023-05-12',
                'description' => 'Description du projet 4',
                'icone' => 'icone4.png',
            ],
            [
                'titre' => 'Projet 5',
                'sous_titre' => 'Sous-titre du projet 5',
                'service_id' => 5,
                'client_name' => 'Twitter',
                'projet_date' => '2023-06-12',
                'description' => 'Description du projet 5',
                'icone' => 'icone5.png',
            ],
            [
                'titre' => 'Projet 6',
                'sous_titre' => 'Sous-titre du projet 6',
                'service_id' => 6,
                'client_name' => 'Instagram',
                'projet_date' => '2023-07-12',
                'description' => 'Description du projet 6',
                'icone' => 'icone6.png',
            ],
            // Ajoutez les autres projets ici...
        ];

        // Parcours des projets et insertion dans la table
        foreach ($projets as $projet) {
            DB::table('projets')->insert($projet);
        }
    }
}
