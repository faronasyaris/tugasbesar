<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use App\Models\Playstation;

class bookingController extends Controller
{
    public function index()
    {
        $booking = booking::all();
        return view('booking.index', compact('booking'));
        
    }
    public function create()
    {
        $playstation=Playstation::where('status','Ada')->get();
        return view('booking.create',compact('playstation'));
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

        ]);
        $request['status'] = 'Dipinjam';
        $ps = Playstation::where('id_playstation',$request->id_playstation)->first();
        booking::create($request->all());
        $ps->update(['status'=>'Dipinjam']);
       
        return redirect('/booking')->with('success', 'Booking Noted!');
    }

    public function edit($id)
    {
        $playstation=Playstation::where('status','Ada')->get();
        $booking = booking::find($id);
        return view('booking.edit', ['booking' => $booking,'playstation'=>$playstation]);
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
            'id_playstation' => 'required',
            'name' => 'required',
            'booking_date' => 'required',
            'booking_duration' => 'required',
            'return_time' => 'required',
            'guarantee' => 'required',
   
        ]);
        $request['status'] = 'Dipinjam';
        $ps = Playstation::where('id_playstation',$booking->id_playstation)->first();
        $ps->update(['status'=>'Ada']);
        $p2s = Playstation::where('id_playstation',$request->id_playstation)->first();
        $p2s->update(['status'=>'Dipinjam']);
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
        $ps = Playstation::where('id_playstation',$booking->id_playstation)->first();
        $ps->update(['status'=>'Ada']);
        $booking->delete();
       
        return redirect('/booking')->with('success', 'Booking Data Deleted');
    }
}