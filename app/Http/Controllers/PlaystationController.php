<?php

namespace App\Http\Controllers;

use App\Models\Playstation;
use Illuminate\Http\Request;

class playstationController extends Controller
{
    public function index()
    {
        $playstation = Playstation::all();
        return view('playstation.index', compact('playstation'));
        
    }
    public function create()
    {
        return view('playstation.create');
    }

    public function store(Request $request)
    {
    
        $request->validate([
            'name' => 'required',
            'foto' => 'required',
            'serial_number' => 'required',
        ]);

        $file = $request->file('foto');
        $nama=uniqid('img_').'.'.$file->getClientOriginalExtension();
   
 

        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama);

        playstation::create([
            'name'=>$request->name,
            'foto'=>$nama,
            'status'=>'Ada',
            'serial_number'=>$request->serial_number
        ]);
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
            'name' => 'required',
            'serial_number' => 'required',
        ]);
        if (!empty($request->foto)){
            $file = $request->file('foto');

        $nama=uniqid('img_').'.'.$file->getClientOriginalExtension();
   
        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama);
        $playstation->update([
            'name'=>$request->name,
            'foto'=>$nama,  
            'serial_number'=>$request->serial_number
        ]);
        }

        $playstation->update([
            'name'=>$request->name,
            'foto'=>$playstation->foto,  
            'serial_number'=>$request->serial_number
        ]);
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