@extends('layout')

@section('content')
<div class="texto">
    <h2>calculo efetuado</h2>
</div>

<div class="row">
    <div class="col-md-3">mês</div>
    <div class="col-md-4">valor a pagar</div>
    <div class="col-md-5">Valor da parcela</div>
</div>

@foreach ($dados as $item)
<div class="row">
    <div class="col-md-3"> {{$item["mes"]}} </div>
    <div class="col-md-4"> R$ {{$item["capitalInicial"]}} </div>
    <div class="col-md-5"> R$ {{$item["capitalAtualizado"]}} </div>
</div>
@endforeach

<button onclick="window.location.href='/';" type="button" 
class="btn btn-lg btn-primary btn-block botao">Voltar</button>

@endsection