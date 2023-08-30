<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use App\Models\Projet;
use App\Models\ProjetImage;
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

        // Récupère les services existants dans la table `services`
        $existingServices = DB::table('services')->get();

        $numberOfFauxProjets = 10;
        $numberOfFauxImagesPerProjet = 4;

        for ($i = 1; $i <= $numberOfFauxProjets; $i++) {
            $projet = Projet::create([
                'id' => Uuid::uuid4()->toString(),
                'titre' => "Projet $i",
                'sous_titre' => "Sous-titre du projet $i",
                'service_id' => $existingServices->random()->id,
                'client_name' => "Client $i",
                'projet_date' => Carbon::now(),
                'description_paragraphe_1' => "Description du projet $i",
                'description_paragraphe_2' => "Description du projet $i",
                'description_paragraphe_3' => "Description du projet $i",
            ]);

            for ($j = 1; $j <= $numberOfFauxImagesPerProjet; $j++) {
                $imageName = "projet{$i}_image{$j}.png";
                $imagePath = 'projets_images/' . $imageName;
                ProjetImage::create([
                    'projet_id' => $projet->id,
                    'path' => $imagePath,
                ]);
            }
        }
    }
}
