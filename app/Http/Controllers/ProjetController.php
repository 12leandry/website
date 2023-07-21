<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Projet;
use App\Models\Service;
use App\Models\ProjetImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page_title = "Projets";
        $projets = Projet::with('icones')->latest()->paginate(5);
        $services_type = Service::pluck('type', 'id');
        return view('projets.index', compact('projets','services_type'))->with(['page_title' => $page_title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'titre' => 'required',
                'sous_titre' => 'required',
                'description_paragraphe_1' => 'required',
                'description_paragraphe_2' => 'nullable',
                'description_paragraphe_3' => 'nullable',
                'service_id' => 'required',
                'client_name' => 'required',
                'projet_date' => 'required',
                'icone' => 'required|array',
                'icone.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


            $projet = Projet::create($data);

            if ($request->hasFile('icone')) {
                foreach ($request->file('icone') as $image) {
                    $imageName = time() . '-' . $image->getClientOriginalName();
                    $imagePath = $image->storeAs('projets_icones', $imageName, 'public');
                    $projet->icones()->create(['path' => $imagePath]);
                }
            }
            
            return redirect()->route('projets.index')->with('success', 'Projet créé avec succès.');
        } catch (Exception $e) {
            // Récupérer le message d'erreur original
            $errorMessage = $e->getMessage();
            return redirect()->back()->withErrors(['error' => $errorMessage]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $projet = Projet::with('service')->findOrFail($id);
        return view('projectdetails', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'titre' => 'required',
                'sous_titre' => 'required',   
                'service_id' => 'required',  
                'description_paragraphe_1' => 'required',
                'description_paragraphe_2' => 'nullable',
                'description_paragraphe_3' => 'nullable',
                'client_name' => 'required',
                'projet_date' => 'required',
                'icone' => 'nullable|array',
                'icone.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $projet = Projet::findOrFail($id);

            // Vérifier si le champ 'icone' est présent dans la requête
            if ($request->hasFile('icone')) {
                // Si le champ 'icone' est un tableau, cela signifie que de nouvelles images ont été téléchargées
                if (is_array($data['icone'])) {
                    // Supprimer les anciennes images qui ne sont pas présentes dans le tableau
                    $oldImages = $projet->icones()->pluck('id')->toArray();
                    $imagesToDelete = array_diff($oldImages, $request->icone);

                    foreach ($imagesToDelete as $imageId) {
                        $image = ProjetImage::findOrFail($imageId);
                        Storage::disk('public')->delete($image->path);
                        $image->delete();
                    }

                    // Ajouter les nouvelles images
                    foreach ($request->file('icone') as $image) {
                        $imageName = time() . '-' . $image->getClientOriginalName();
                        $imagePath = $image->storeAs('projets_icones', $imageName, 'public');
                        $projet->icones()->create(['path' => $imagePath]);
                    }
                }
            }

            // Mise à jour des autres attributs du projet
            $projet->update($data);

            return redirect()->route('projets.index')->with('success', 'Projet mis à jour avec succès.');
        } catch (Exception $e) {
            // Récupérer le message d'erreur original
            $errorMessage = $e->getMessage();
            return redirect()->back()->withErrors(['error' => $errorMessage]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $projet = Projet::with('icones')->findOrFail($id);

            // Loop through the images and delete them from storage
            foreach ($projet->icones as $icone) {
                Storage::disk('public')->delete($icone->path);
            }

            // Delete the project
            $projet->delete();

            return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès.');
        } catch (Exception $e) {
            // Récupérer le message d'erreur original
            $errorMessage = $e->getMessage();
            return redirect()->back()->withErrors(['error' => $errorMessage]);
        }
    }
}
