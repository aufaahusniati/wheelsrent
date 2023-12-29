<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Make;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.reservation.index', [
            // 'cars' => Car::all(),
            'reservations' => Reservation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservation.create', [
            'cars' => Car::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
       
            'start_date' => 'required',
            'end_date' => 'required',
            'car_id' => 'required',
            'email' => 'required|max:255',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required'
        ]);

        $validatedData['start_date'] = Carbon::parse($request->start_date)->format('Y-m-d');
        $validatedData['end_date'] = Carbon::parse($request->end_date)->format('Y-m-d');
        
        Reservation::create($validatedData);

        return redirect('/reservation/create')->with('success', 'New Reservation has been added!');
        
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
        Reservation::destroy($reservation->id);

        return redirect('/dashboard/reservation')->with('success', 'Make has been deleted!');
    }
}