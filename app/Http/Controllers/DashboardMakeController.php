<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Make;

class DashboardMakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.make.index', [
            'makes'=> Make::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.make.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'make_name' => 'required|max:255',
        ]);

        Make::create($validatedData);

        return redirect('/dashboard/make')->with('success', 'New Make has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Make $make)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Make $make)
    {
        return view('dashboard.make.edit', [
            'make'=> $make,
            'makes'=> Make::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Make $make)
    {
        $rules = [
            'make_name' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        Make::where('id', $make->id)
            ->update($validatedData);

        return redirect('/dashboard/make')->with('success', 'Make has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Make $make)
    {
        Make::destroy($make->id);

        return redirect('/dashboard/make')->with('success', 'Make has been deleted!');
    }
}
