<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{
    public function index(){
        return view('sites.accueil');
    }


    public function about(){
        return view('sites.about');
    }


    public function sites(){
        return view('sites.sites');
    }


    public function contact(){
        return view('sites.contact');
    }


    public function reservation(){
        return view('sites.reservation');
    }
}
