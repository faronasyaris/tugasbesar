<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    public function index()
    {
        $booking = booking::all();
        return view('booking.index', compact('booking'));
        
    }
    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_booking' => 'required',
            'id_playstation' => 'required',
            'name' => 'required',
            'booking_date' => 'required',
            'booking_duration' => 'required',
            'return_time' => 'required',
            'guarantee' => 'required',
            'status' => 'required',
        ]);

        booking::create($request->all());
        return redirect('/booking')->with('success', 'Booking Noted!');
    }

    public function edit($id)
    {
        $booking = booking::find($id);
        return view('booking.edit', ['booking' => $booking]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        $request->validate([
            'id_booking' => 'required',
            'id_playstation' => 'required',
            'name' => 'required',
            'booking_date' => 'required',
            'booking_duration' => 'required',
            'return_time' => 'required',
            'guarantee' => 'required',
            'status' => 'required',
        ]);

        $booking->update($request->all());
        return redirect('/booking')->with('success', 'Booking Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        $booking->delete();
        return redirect('/booking')->with('success', 'Booking Data Deleted');
    }
}