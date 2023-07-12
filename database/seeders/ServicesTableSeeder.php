<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'titre' => 'Service 1',
                'sous_titre' => 'Sous-titre du service 1',
                'description' => 'Description du service 1',
                'icone' => 'icone1.png',
            ],
            [
                'titre' => 'Service 2',
                'sous_titre' => 'Sous-titre du service 2',
                'description' => 'Description du service 2',
                'icone' => 'icone2.png',
            ],
            [
                'titre' => 'Service 3',
                'sous_titre' => 'Sous-titre du service 3',
                'description' => 'Description du service 3',
                'icone' => 'icone3.png',
            ],
            [
                'titre' => 'Service 4',
                'sous_titre' => 'Sous-titre du service 4',
                'description' => 'Description du service 4',
                'icone' => 'icone4.png',
            ],
            [
                'titre' => 'Service 5',
                'sous_titre' => 'Sous-titre du service 5',
                'description' => 'Description du service 5',
                'icone' => 'icone5.png',
            ],
            [
                'titre' => 'Service 6',
                'sous_titre' => 'Sous-titre du service 6',
                'description' => 'Description du service 6',
                'icone' => 'icone6.png',
            ],
            // Ajoutez les autres services ici...
        ];

        // Parcours des services et insertion dans la table
        foreach ($services as $service) {
            DB::table('services')->insert($service);
        }
    }
}
