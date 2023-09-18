<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use App\Models\szin;

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
        return view('lista',["autok"=> $autok,"motorTipusok" => $this->motorTipusok,"meghajtastip" => $this->meghajtastip]);
    }

    public function felvetel(){
        $szinek = szin::all();
        return view('felvetel',["motorTipusok" => $this->motorTipusok,"meghajtastip" => $this->meghajtastip,"szinek"=>$szinek]);
    }


    public function autoRogzites(Request $req){

        $req->validate(
        [
            "rendszam" => "required|min:6|max:10|alpha_num:ascii",
            "motor_tipus" => "required",
            "meghajtas_tipus" => "required",
            "szin_tp" => "required|min:1"

        ],[
            "rendszam.required" => "A mező kitöltése kötelező!",
            "rendszam.min" => "Minimum 6 karaktert!",
            "rendszam.max" => "Maximum 10 karaktert!",
            "rendszam.alpha_num" => "Csak a-Z és 0-9",

            "motor_tipus.required" => "Vállasz mezőt!",

            "meghajtas_tipus.required" => "Vállasz mezőt!",

            "szin_tp.required" => "Vállasz mezőt!",
            "szin_tp.min" => "Vállasz mezőt!"
        ]
    );

            $auto = new Auto;
            $auto->rendszam = $req->input('rendszam');
            $auto->szin_id = $req->input('szin_id');
            $auto->meghajtas = $req->input('meghajtas');
            $auto->motor_tipus = $req->input('motor_tipus');
            $auto->save();

            return readdirect()->route('felvetel')->with("felvetelKesz",'1');
    }


    public function modositas($aid){
        $auto = Auto::find($aid,["autok"=> $autok,"motorTipusok" => $this->motorTipusok,"meghajtastip" => $this->meghajtastip, "szinek" => $szinek]);
    }

}


