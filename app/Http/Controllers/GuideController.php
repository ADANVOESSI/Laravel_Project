<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $guides = DB::select('select * from guide');

        return view('sites.reservation', ['guides' => $guides]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->guideModel = new GuideModel();
        // $resultatG = $this->guideModel->showGuide();
        // $count = $this->guideModel->countGuid();
        // $nbrGuide = $count["countG"];
        // require_once('../App/Views/Admin/guide.php');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Guide $guide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guide $guide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guide $guide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guide $guide)
    {
        //
    }
}
