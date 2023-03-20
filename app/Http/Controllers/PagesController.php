<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Campagne;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PagesController extends Controller

{
    public function index(){
        return view('sites.accueil');
    }


    public function about(){
        return view('sites.about');
    }

    public function campagne(): View 
    {

        $users = DB::select('select * from users');
        
        foreach ($users as $user) {
            echo $user->name . " " . $user->email;
        }
        return view('chirps.campagne', ['user' => $users]);
        // return view('chirps.campagne');
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
