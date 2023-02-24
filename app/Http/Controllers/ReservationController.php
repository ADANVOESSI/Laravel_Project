<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        return view('sites.reservation');

        // $reservations = Reservation::all();

        // return view('reservations.reservations');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->reservationModel = new ReservationModel();
        // $userID = $_SESSION["user_id"];
        // $this->userID = $userID;
        // $resultatReservation = $this->reservationModel->afficheReservation($this->userID);
        // $tabCount = $this->reservationModel->countReservationUser($this->userID);
        // $nbrReservation = $tabCount["countR"]; 
        // require_once('../App/Views/Users/afficheReservation.php');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'hotel' => 'required|string|max:50',
            'date_Arr' => 'required|date',
            'date_sort' => 'required|date',
            'adult' => 'required|number',
            'child' => 'required|number',
            'room' => 'required|string|max:255',
            'nbr_room' => 'required|number',
        ]);
 
        $request->user()->reservations()->create($validated);
 
        return redirect(route('sites.reservation'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
