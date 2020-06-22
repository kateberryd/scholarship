<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function contact(){
        return view('contact');
    }

    public function courses(){
        return view('courses');
    }

    public function blog(){
        return view('blog');
    }

    public function about(){
        return view('about-us');
    }

    public function aboutUWI(){
        return view('about-uwi');
    }

    public function aboutGlomode(){
        return view('about-glomode');
    }
    public function programmesEligible(){
        return view('eligible-programmes');
    }
    public function programmesAvailable(){
        return view('available-programmes');
    }
    public function services(){
        return view('services');
    }
    public function home(){
        return view('backend.home');
    }
  
    
}
