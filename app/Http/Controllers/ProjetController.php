<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        return view('projets.index', compact('projets'));
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
                'description' => 'required',
                'icone' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('icone')) {
                $image = $request->file('icone');
                $imageName = time() . '-projet.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('projets_icones', $imageName, 'public');
                $data['icone'] = $imagePath;
            }

            Projet::create($data);
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
    public function show(Projet $projet)
    {
        //
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
                'description' => 'required',
                'icone' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $projet = Projet::findOrFail($id);
    
            if ($request->hasFile('icone')) {
                $image = $request->file('icone');
                $imageName = time()  . '-projet.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('projets_icones', $imageName, 'public');
                $data['icone'] = $imagePath;
            }
    
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
            $projet = Projet::findOrFail($id);
    
            // Supprimer l'icône du projet s'il en existe une
            Storage::disk('public')->delete($projet->icone);
    
            $projet->delete();
    
            return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès.');
        } catch (Exception $e) {
            // Récupérer le message d'erreur original
            $errorMessage = $e->getMessage();
            return redirect()->back()->withErrors(['error' => $errorMessage]);
        }
    }
}
