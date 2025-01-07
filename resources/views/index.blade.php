@extends('layout')

@section('content')
        
<form class="form-signin" action="{{route('calcular')}}" method="POST">
@csrf
<div class="texto">
<hl class="h3 mb-3 font-weight-normal">calcular juros ao mes</h1>
</div>
<label for="capital" class="sr-only">capital inicial: R$</label>
<input type="number" id="capital" class="form-control" name="capital"
placeholder="100.000" min="10" required autofocus>
<label for="taxa" class="sr-only">taxa fixa: %</label>
<input type="number" id="number" class="form-control" name="taxa"
placeholder="10" min="1" required>
<label for="período" class="sr-only">período de tempo: (meses)</label>
<input type="number" id="number" class="form-control" name="periodo"
placeholder="3" min="1" required>
<button class="btn btn-lg btn-primary btn-block" type="submit">calcular</button>
<p class="mt-5 mb-3 text-muted">&copy; 2025</p>
</form>

@endsection



