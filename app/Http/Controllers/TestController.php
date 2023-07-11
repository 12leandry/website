<?php

namespace App\Http\Controllers;

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
        return view('project');
    }
    public function contact()
    {
        return view('contact');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    
}
