<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCalculo extends Controller
{
    public function Calcular (Request $request) 
    { 
        $capital = $request->input('capital');
        $taxa = $request->input('tx');
        $periodo = $request->input('periodo');
        $juros = $taxa / 100;
        $mes = $periodo;
        $capitalAtualizado = $capital;
        

        
            
        $dados = array();
         for($i = 1; $i<= $periodo; $i++){
             $dados[$i]['mes'] = $i; 
             $capitalAtualizado = $capitalAtualizado + ($capitalAtualizado * $juros);
             $parcela = $capitalAtualizado / $mes;
             $dados[$i]['capitalInicial'] = number_format($capital, 2, ',','.'); 
             $dados[$i]['capitalAtualizado'] = number_format($capitalAtualizado, 2, ',', '.');
             $dados[$i]['parcela'] = number_format($parcela, 2, ',','.');  ;
             $mes--;
             $capitalAtualizado = $capitalAtualizado - $parcela;
           
        } 
            return view('resposta', compact('dados'));
           
    }

}