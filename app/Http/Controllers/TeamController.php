<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page_title = "Membres";
        $teams = Team::all();
        return view('teams.index', compact('teams'))->with(['page_title' => $page_title]);
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
                'noms' => 'required',
                'prenoms' => 'required',
                'poste' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '-team.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('team_images', $imageName, 'public');
                $data['image'] = $imagePath;
            }

            Team::create($data);
            return redirect()->route('teams.index')->with('success', 'Membre créé avec succès.');
        } catch (Exception $e) {
            // Récupérer le message d'erreur original
            $errorMessage = $e->getMessage();
            return redirect()->back()->withErrors(['error' => $errorMessage]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
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
                'noms' => 'required',
                'prenoms' => 'nullable',
                'poste' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $team = Team::findOrFail($id);
    
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '-team.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('team_images', $imageName, 'public');
                $data['image'] = $imagePath;
            }
    
            $team->update($data);
    
            return redirect()->route('teams.index')->with('success', 'Membre mis à jour avec succès.');
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
            $team = Team::findOrFail($id);
    
            // Supprimer l'icône du membre s'il en existe une
            Storage::disk('public')->delete($team->image);
    
            $team->delete();
    
            return redirect()->route('teams.index')->with('success', 'Membre supprimé avec succès.');
        } catch (Exception $e) {
            // Récupérer le message d'erreur original
            $errorMessage = $e->getMessage();
            return redirect()->back()->withErrors(['error' => $errorMessage]);
        }
    }
}
