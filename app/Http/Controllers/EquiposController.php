<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EquiposController extends Controller
{
    public function avg(){
        $equipos = DB::table('equipos')->get();
        
        return view('avg_equipo', compact('equipos'));
    }
    
    public function find(){
        
        return view('find');
    }
    
    public function findPlayer($name){
        
        $jugador = DB::table('jugadores')->where('jugadores.nombre', 'REGEXP', $name)
        ->join('equipos', 'equipos.id', 'equipo_id')
        ->selectRaw('equipos.nombre as nombre_equipo, jugadores.nombre as nombre_jugador')
        ->first();

        if(isset($jugador)){
            return response()->json($jugador);
        }else{
            return ;
        }
    }
}
