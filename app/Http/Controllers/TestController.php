<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

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
        $services_type = Service::pluck('type', 'id');
        // return view('projets.index', compact('projets','services_type'))->with(['page_title' => $page_title]);
        return view('project', compact('services_type'));
    }
    public function contact()
    {
        return view('contact');
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
    
}
