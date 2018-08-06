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

                    {{-- **** Retorna o Filme do ID - Exercicio 5a  **** --}}        
                    @if($localiza === 0)                    
                        <h2>Filme do ID <font color=blue>{{$banana['id']}}</font></h2><br>
                        <font color=red>
                            {{$banana->getNomeFilme()}}
                        </font>
                    @endif

                    {{-- **** Retorna todos os filmes - Exercicio 5a  **** --}} 
                    @if($localiza === 1)                    
                        <h2>Filmes</h2>
                        <ul>
                            @foreach($banana as $filme)
                            <li>
                                <font color=red>
                                    {{$filme->getNomeFilme()}}
                                </font>
                            </li>
                            @endforeach                
                        </ul>
                    @endif

                    {{-- **** Retorna o nome do Filme - Exercicio 5a  **** --}}        
                    @if($localiza === 2)    
                        @if($banana !== '')                
                            <h2>Filme encontrado</h2><br>
                            <font color=red>
                                {{$banana->getNomeFilme()}}
                            </font>
                        @else
                            <h2>Filme nao localizado</h2><br>
                        @endif
                    @endif

                </div>   
            </div>
        </div>
    </body>
</html>
