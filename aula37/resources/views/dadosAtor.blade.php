<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atores</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">

                    {{-- **** Retorna os dados do Ator com link - Exercicio 3h  **** --}}                                       

                    <h1>Dados completos do Ator</h1>
                    <label>Nome: {{$dadosAtor['first_name']}}</label><br>
                    <label>Sobrenome: {{$dadosAtor['last_name']}}</label><br>
                    <label>Rating: {{$dadosAtor['rating']}}</label><br>
                    <label>ID do Filme Favorito: {{$dadosAtor['favorite_movie_id']}}</label>                   

                    <br><p></p><br><p></p>
                    <a href="/ator/{{$dadosAtor->getId()}}">Voltar</a>
                
                </div>   
            </div>
        </div>
    </body>
</html>
