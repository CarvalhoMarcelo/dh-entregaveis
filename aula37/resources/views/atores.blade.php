<?php

    if($_GET){
        if(isset($_GET['nome'])){
            $nome = $_GET['nome'];
        }
        else{
            $nome = '';
        }
    }
    else{
        $nome = '';
    }

?>


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

                    {{-- **** Retorna todos os Atores - Exercicio 3c  **** --}}
                    {{--
                    <h2>Nome completo dos Atores</h2>
                    <ul>
                        @foreach($atorEncontrado as $ator)
                        <li>
                            <font color=red>{{$ator->getNomeCompleto()}}</font>
                        </li>
                        @endforeach                
                    </ul>
                    --}}

                    {{-- **** Retorna todos os filmes dos Atores - Exercicio 3d  **** --}} 
                    {{-- 
                    <h2>Filme dos Atores</h2>
                    <ul>
                        @foreach($filmesDoAtor as $filme)
                        <li>
                            <font color=red>
                                {{$filme}}
                            </font>
                        </li>
                        @endforeach                
                    </ul>
                    --}}

                    {{-- **** Retorna o Ator do ID - Exercicio 3f  **** --}}        
                    {{--
                    <h2>Ator do ID</h2><br>
                    <font color=red>
                        {{$ator->getNomeCompleto()}}
                    </font>
                    --}}                    

                    {{-- **** Retorna o Filme do ID com todos os dados - Exercicio 3g  **** --}}                            
                    {{--
                    <h2>Dados do Filme do Ator</h2>
                    <h3>
                        <label>Nome do Ator</label>
                        <br>
                        <font color=red>{{$ator->getNomeCompleto()}}</font>
                        <br>
                        <label>Dados do Filme</label>
                        <br>
                        <font color=red>
                            <label>Titulo: {{$filme['title']}}</label><br>
                            <label>Genero: {{$filme['genre_id']}}</label><br>
                            <label>Rating: {{$filme['rating']}}</label><br>
                            <label>Data de Lancamento: {{$filme['release_date']}}</label><br>
                            <label>Premios: {{$filme['award']}}</label><br>
                            <label>Duracao: {{$filme['length']}}</label><br>
                        </font>
                    </h3>
                    --}}

                    {{-- **** Retorna os dados do Ator com link - Exercicio 3h  **** --}}                    
                    {{--        
                    <h2>Clique no link para ver os Dados do Ator</h2>
                    <a href="/dadosAtor/{{$ator->getId()}}">
                        <font color=red>{{$ator->getNomeCompleto()}}</font>
                    </a>
                    --}}
                
                    {{-- **** Retorna os dados do Ator com link - Exercicio 4a / 4d **** --}} 
                    <form action="/atores/procurar" method=GET>
                        Digite qualquer letra ou nome do ator <br>
                        <input type="text" name="nome" id="">                    
                        <br><p></p>                        
                        <input type="submit" value="Procurar">
                    </form>
                    @if($nome !== '')
                        @if($nomeAtor)
                            <ul>
                                <h2><font color=blue>
                                    @foreach($nomeAtor as $ator)
                                        <li>{{$ator['first_name']. " " .$ator['last_name']}}</li>                                
                                    @endforeach
                                </font></h2>
                            </ul>                            
                           <form action="/atores1">
                              <input type="submit" value="Limpar">                            
                          </form>
                        @endif    
                    @endif
                </div>   
            </div>
        </div>
    </body>
</html>
