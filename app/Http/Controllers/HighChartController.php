<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Votocandidato;

class HighChartController extends Controller
{
    public function index(){
        $cantvotos = Votocandidato::all();

        $dataPoints = [];

        foreach($cantvotos as $cantvoto){
            $dataPoints[] = [
                "candidato_id" => $cantvoto['candidato_id'],
                "y" => floatval($cantvoto['votos'])
            ];
        }

        return view("voto/highChart", [
            "data" => json_encode($dataPoints)
        ]);
    }
}
