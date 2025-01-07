<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCalculo extends Controller
{
    public function Calcular(Request $request){
        $capital = $request->input('capital');
        $taxa = $request->input('taxa');
        $periodo = $request->input('periodo');
        $juros = $taxa/100;
        $k = $periodo;

        //echo $capital . " " . $taxa . " " . $periodo;

        $dados = array();

        for($i = $periodo; $i >= 1; $i--){
            $dados[$i]['mes'] = $k;
            $dados[$i]['capitalInicial'] = number_format($capital, 2, ',', '.');
            $dados[$i]['capitalAtualizado'] = number_format(($capital + ($capital * $juros))/$i, 2, ',', '.');
            $capital = ($capital + ($capital * $juros)) - (($capital + ($capital * $juros))/$i);
            $k--;
        }

        return view('resposta', compact('dados'));
    }
}