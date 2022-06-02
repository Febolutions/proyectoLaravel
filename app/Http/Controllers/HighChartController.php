<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Votocandidato;
use App\Models\Candidato;

class HighChartController extends Controller
{
    public function index(){
        //$cantvotos = Votocandidato::all();
        $cantvotos = Candidato::join("votocandidato", "votocandidato.candidato_id", "=", "candidato.id")
        ->select("nombrecompleto","votos")
        ->get();

        $dataPoints = [];

        foreach($cantvotos as $cantvoto){
            $dataPoints[] = [
                "nombre" => $cantvoto['nombrecompleto'],
                "y" => floatval($cantvoto['votos'])
            ];
        }

        return view("voto/highChart", [
            "data" => json_encode($dataPoints)
        ]);
    }
}
