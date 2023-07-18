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
                'type' => ' BTP',
                'description' => 'Description du projet 1',
                'icone' => 'icone1.png',
            ],
            [
                'titre' => 'Projet 2',
                'sous_titre' => 'Sous-titre du projet 2',
                'type' => ' BTP 2',
                'description' => 'Description du projet 2',
                'icone' => 'icone2.png',
            ],
            [
                'titre' => 'Projet 3',
                'sous_titre' => 'Sous-titre du projet 3',
                'type' => ' BTP 3',
                'description' => 'Description du projet 3',
                'icone' => 'icone3.png',
            ],
            [
                'titre' => 'Projet 4',
                'sous_titre' => 'Sous-titre du projet 4',
                'type' => ' BTP 4',
                'description' => 'Description du projet 4',
                'icone' => 'icone4.png',
            ],
            [
                'titre' => 'Projet 5',
                'sous_titre' => 'Sous-titre du projet 5',
                'type' => ' BTP 5',
                'description' => 'Description du projet 5',
                'icone' => 'icone5.png',
            ],
            [
                'titre' => 'Projet 6',
                'sous_titre' => 'Sous-titre du projet 6',
                'type' => ' BTP 6',
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
