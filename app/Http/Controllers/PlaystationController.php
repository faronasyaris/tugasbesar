<?php

namespace App\Http\Controllers;

use App\Models\Playstation;
use Illuminate\Http\Request;

class PlaystationController extends Controller
{
    public function index()
    {
        $playstations = Playstation::all();
        return view('Playstation.index', compact('playstations'));
    }
    public function create()
    {
        return view('Playstation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_playstation' => 'required',
            'name' => 'required',
            'booking_date' => 'required',
            'booking_duration' => 'required',
            'return_time' => 'required',
            'guarantee' => 'required',
            'status' => 'required',
        ]);

        Playstation::create($request->all());
        return redirect('/playstation')->with('success', 'Booking Noted!');
    }

    public function edit($id)
    {
        $playstation = Playstation::find($id);
        return view('Playstation.edit', ['Playstation' => $Playstation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playstation  $playstation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playstation $Playstation)
    {
        $request->validate([
            'id_playstation' => 'required',
            'name' => 'required',
            'booking_date' => 'required',
            'booking_duration' => 'required',
            'return_time' => 'required',
            'guarantee' => 'required',
            'status' => 'required',
        ]);

        $Playstation->update($request->all());
        return redirect('/playstation')->with('success', 'Booking Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playstation  $playstation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playstation $playstation)
    {
        $playstation->delete();
        return redirect('/playstation')->with('success', 'Booking Data Deleted');
    }
}