<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
            return view('userViews.welcome');
    }
    public function about(){
          return view('userViews.about');
    }
    public function contact(){
          return view('userViews.contact');
    }
    public function ctsnewagecourse(){
            return view('userViews.ctsnewagecourse');
    }
    public function electrician(){
          return view('userViews.electrician');
    }
    public function iot(){
         return view('userViews.iot');
    }
    public function solar(){
        return view('userViews.solar');
   }


    public function advanceDiploma(){
            return view('userViews.advanceDiploma');
    }
    public function adit(){
            return view('userViews.adit');
    }

    public function cits(){
        return view('userViews.cits');
    }
    public function mechanicAc(){
        return view('userViews.mechanicAc');
    }
    public function readingOfDrawing(){
        return view('userViews.readingOfDrawing');
    }
    public function electricianAndWireman(){
        return view('userViews.electricianAndWireman');
    }
    public function electronicMechanic(){
        return view('userViews.electronicMechanic');
    }

    public function welder(){
        return view('userViews.welder');
    }

    public function register(){
          return view('userViews.register');
    }
    public function login(){
        return view('userViews.login');
  }
}
