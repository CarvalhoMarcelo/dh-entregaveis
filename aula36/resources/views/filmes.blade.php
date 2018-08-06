<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Filmes</title>
    </head>
    <body>
        <div>
            <div>
                <div>                
                    {{-- ****** Procura o filme por ID ****** Exercicio 2c e 2d --}}                    
                    @if($localiza === 0)
                        @if($banana !== 0)
                            <h1>Localizado o filme<font color=red>
                            {{$banana}}
                            </font></h1>
                        @else
                            <h1><font color=red>
                            Nenhum filme localizado!
                            </font></h1>                                                
                        @endif                         
                    {{-- ****** Procura o filme por NOME ****** --}}                        
                    @elseif($localiza === 1)
                        @if($banana !== '')
                            <h1>Filme<font color=red>
                            {{$banana}}
                            </font> localizado!</h1>                                                    
                        @else
                            <h1><font color = red> Não foram encontrados resultados</font></h1>
                        
                        @endif                     
                    @endif    

                    {{-- ****** Lista todos os filmes do array ****** Exercicio 2a --}}                
                    @if($localiza === 2)
                        <ul>
                            @foreach($banana as $filme)
                                <li><font color=red>{{$filme}}</font><br></li>
                            @endforeach                   
                        </ul>
                    @endif

                    {{-- ****** Adiciona um filme ao array ****** Exercicio 2e --}}                
                    @if($localiza === 3)
                        <h1>O filme <font color=red>{{$nome}}</font> foi adicionado com sucesso</h1>
                        <br>
                        <ul>
                            @foreach($banana as $filme)
                                <li><font color=red>{{$filme}}</font><br></li>
                            @endforeach                   
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
