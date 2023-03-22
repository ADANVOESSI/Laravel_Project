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

        return view('sites.reservation', [
            'reservations' => Reservation::with('user')->latest()->get(),
        ]);

        // $reservations = Reservation::all();

        // return view('reservations.reservations');
    }

    public function hotel(): View
    {

        return view('sites.hotel', [
            'reservations' => Reservation::with('users')->latest()->get(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'hotel' => 'required|string|max:50',
            'date_Arr' => 'required|date',
            'date_Sort' => 'required|date',
            'adult' => 'required|integer',
            'child' => 'required|integer',
            'room' => 'required|string|max:255',
            'nbr_room' => 'required|integer',
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
