<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page_title = "Services";
        $services = Service::latest()->paginate(5);
        return view('services.index', compact('services'))->with(['page_title' => $page_title]);
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
                'type' => 'required',
                'description' => 'required',
                'icone' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('icone')) {
                $image = $request->file('icone');
                $imageName = time() . '-service.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('services_icones', $imageName, 'public');
                $data['icone'] = $imagePath;
            }

            Service::create($data);
            return redirect()->route('services.index')->with('success', 'Service créé avec succès.');
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
        $service = Service::with('projets')->findOrFail($id);
        return view('servicedetails', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
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
                'type' => 'required',
                'description' => 'required',
                'icone' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $service = Service::findOrFail($id);
    
            if ($request->hasFile('icone')) {
                $image = $request->file('icone');
                $imageName = time() . '-service.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('services_icones', $imageName, 'public');
                $data['icone'] = $imagePath;
            }
    
            $service->update($data);
    
            return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès.');
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
            $service = Service::findOrFail($id);
    
            // Supprimer l'icône du service s'il en existe une
            Storage::disk('public')->delete($service->icone);
    
            $service->delete();
    
            return redirect()->route('services.index')->with('success', 'Service supprimé avec succès.');
        } catch (Exception $e) {
            // Récupérer le message d'erreur original
            $errorMessage = $e->getMessage();
            return redirect()->back()->withErrors(['error' => $errorMessage]);
        }
    }
    public function render()
    {
        $service = Services::where(['id'=>$this->user_uuid])->first();
        $post = Post::where(['user_id'=>$user->id, 'uuid'=>$this->post_uuid])->with(['user', 'commentss' => function ($query) {
            $query->where('status', 'published'); }])->first();
        // dd($user);
        return view('livewire.single-post', [
            'post' => $post
        ]);
    }
}
