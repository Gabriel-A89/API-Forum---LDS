@extends('common.mdb-pagewithmenu')


@section('content')

@include('parts.public-navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylecad.css') }}">

    <title>Cadastro</title>
</head>
<body>
    <div class="main-cadastro">
        <div class="left-cadastro">
            <h1>Cadastre-se<br><br> E entre para nossa comunidade<br></h1>
            <img src="{{ asset('img/hifive.svg') }}" class="left-cadastro-image">
        </div>
        <div class="right-cadastro">
            <div class="card-cadastro">
                <div class="textfield">
                    <label for="usuario">Nome completo</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>

                <div class="textfield">
                    <label for="senha">Email</label>
                    <input type="text" name="email" placeholder="Digite seu email">
                </div>
               
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <div class="textfield">
                    <label for="senha"></label>
                    <input type="password" name="confirmsenha" placeholder="Confirme sua senha">
                </div>

            <form action="processar_formulario.php" method="post">
            <input type="checkbox" id="concordo" name="concordo" required>  <label for="concordo">Eu concordo com os termos</label>
    
            <br>
            </form>

                <button class="btn-cadastro">Cadastrar</button>
            </div>
        </div>
    </div>
</body>
</html>

@include('parts.public-footer')

@endsection