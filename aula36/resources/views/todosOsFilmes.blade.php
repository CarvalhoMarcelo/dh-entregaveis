<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar todos os Filmes</title>
    </head>
    <body>
        <div>
            <div>
                <div>                
                    {{-- ****** Lista todos os filmes do array ****** Exercicio 2f --}}                
                    <h1><font color=blue>Listando todos os Filmes do Array</font></h1><br>
                    <ul>
                        @foreach($banana as $filme)
                            <li><font color=red>{{$filme}}</font><br></li>
                        @endforeach                   
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
