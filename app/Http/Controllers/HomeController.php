<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playstation;
class HomeController extends Controller
{
    //
    public function index(){
        $playstation=Playstation::all();
        return view ('home.home',compact('playstation'));
    }
}
