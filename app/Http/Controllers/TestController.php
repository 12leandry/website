<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Projet;
use App\Models\Service;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function services()
    {
        return view('services');
    }
    public function projects()
    {
        $projets = Projet::all();
        $services_type = Service::pluck('type', 'id');

        // Charger les images pour chaque projet
        foreach ($projets as $projet) {
            $projet->load('icones');
        }

        return view('project', compact('services_type','projets'));
    }
    public function contact()
    {
        $services_type = Service::pluck('type', 'id');
        return view('contact', compact('services_type'));
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    public function servicedetail()
    {
        return view('servicedetails');
    }
    public function projectdetail()
    {
        return view('projectdetails');
    }

    public function dashboard()
    {
        $page_title = "Dashboard";

        $services = Service::all();
        $projets = Projet::all();
        $team = Team::all();

        $totalServices = $services->count();
        $totalProjets = $projets->count();
        $totalTeamMembers = $team->count();

        return view('dashboard', compact('totalServices', 'totalProjets', 'totalTeamMembers'))->with(['page_title' => $page_title]);
        // return view('dashboard');
    }


    public function sendEmail(Request $request)
    {

        // Adresse e-mail du destinataire
        $recipientEmail = 'destinataire@example.com';

        // Récupérer les données du formulaire
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        Mail::to($recipientEmail)->send(new ContactMail($name, $email, $subject, $message));

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }
    
}
