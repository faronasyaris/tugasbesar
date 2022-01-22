<?php

namespace App\Http\Controllers;

use App\Models\playstation;
use Illuminate\Http\Request;

class playstationController extends Controller
{
    public function index()
    {
        $playstation = playstation::all();
        return view('playstation.index', compact('playstation'));
        
    }
    public function create()
    {
        return view('playstation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_playstation' => 'required',
            'name' => 'required',
            'foto' => 'required',
            'status' => 'required',
            'serial_number' => 'required',
        ]);

        playstation::create($request->all());
        return redirect('/playstation')->with('success', 'playstation Noted!');
    }

    public function edit($id)
    {
        $playstation = playstation::find($id);
        return view('playstation.edit', ['playstation' => $playstation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\playstation  $playstation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, playstation $playstation)
    {
        $request->validate([
            'id_playstation' => 'required',
            'name' => 'required',
            'status' => 'required',
            'serial_number' => 'required',
        ]);

        $playstation->update($request->all());
        return redirect('/playstation')->with('success', 'playstation Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\playstation  $playstation
     * @return \Illuminate\Http\Response
     */
    public function destroy(playstation $playstation)
    {
        $playstation->delete();
        return redirect('/playstation')->with('success', 'playstation Data Deleted');
    }
}