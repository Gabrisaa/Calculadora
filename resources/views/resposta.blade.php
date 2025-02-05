@extends('layout') 

@section('content') 
 <div class="texto">
     <h2>Cálculo efetuado</h2> 
    </div> 
    
    <div class="row">
         <div class="col-md-3">Mês</div> 
         <div class="col-md-6">Valor inicial</div> 
         <div class="col-md-3">Valor atualizado</div> 
        </div> 

        @foreach ($dados as $item)
         <div class="row">
          <div class="col-md-3"> Parcela {{$item["mes"]}} </div>
            <div class="col-md-6">Restante: R$ {{$item["capitalAtualizado"]}} + juros =  </div> 
            <div class="col-md-3">- Parcela: {{$item["parcela"]}}</div>
         </div> 
            
            @endforeach

        <button onclick="window.location.href='/';" type="button" 
         class="btn btn-lg btn-primary btn-block botao">Voltar</button>
         
         @endsection