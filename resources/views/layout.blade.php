<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora de Empréstimo</title>
    @vite(['resources/js/app'])
</head>
<body>
    <div class="container">
        <div class="imagem">
            <img class="mb-4 img" src="{{asset('storage/imagem/logo.png')}}" alt=""
                 width="90" height="90">
</div>
@hasSection ('content')
    @yield('content')
@endif
</div>
</body>
</html>

