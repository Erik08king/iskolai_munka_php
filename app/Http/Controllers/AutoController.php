<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{

    public $motorTipusok = ['e' => "Elektromos",
    'd' => "Diessel",
    'b' => "Benzines",
    'h' => "Hibrid"];

    public $meghajtastip = [ 'e' => "Elsőhatásásos",
    'o' => "Összmeghajtás",
    'h' => "Hátsomeghajtás"];

    public function listaz(){
        $autok = Auto::all();
        return view('lista',["autok"=> $autok,"motorTipusok" => $this->$motorTipusok,"meghajtastip" => $this->$meghajtastip]);
    }

    public function felvetel(){
        return view('felvetel',["motorTipusok" => $this->motorTipusok,"meghajtastip" => $this->meghajtastip]);
    }

}


