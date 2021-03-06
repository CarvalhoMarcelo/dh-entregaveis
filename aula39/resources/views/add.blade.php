<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Ator</title>
    </head>
    <body>

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 align="center">Formulário Atores</h1>
        <form action="/actors/add" id="adicionarAtor" name="adicionarAtor" method="POST">

            {{csrf_field()}}
                        

            <div class="form-group col-6 m-auto">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="first_name" id="nome" value="{{old('first_name')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="last_name" id="sobrenome" value="{{old('last_name')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" name="rating" id="classificacao" value="{{old('rating')}}"/>
            </div>
            <div class="form-group col-6 m-auto">         
                <label for="filmes">Lista de Filmes</label>   
                <select name="favorite_movie_id" class="form-control">
                    @foreach($filmes as $filme)
                        <option value="{{$filme['id']}}" name="favorite_movie_id">{{$filme['title']}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
                <input type="submit" value="Adicionar Ator" name="submit" class="btn btn-primary"/>
                <a href="/actors/true" class="btn btn-primary"/>Listar todos Atores</a>
                @if($retorno == true)
                    <a href="/actors" class="btn btn-primary"/>Limpar Formulário</a>
                @endif    
            </div>
            <br><p></p>

            <div class="form-group col-6 m-auto">
                @if($retorno == true)
                    <h1 align="center">Listagem de todos Atores</h1>
                    <table>
                    <tr>
                        <th>Ator</th>
                        <th>Filme</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                    @foreach($sql as $ator)
                        <tr>
                            <td>{{$ator['first_name'] . " ". $ator['last_name']}}</td>
                            @if($ator['title'] == '')
                                <td><font color=red>NÃO EXISTE FILME/FILME_ID CADASTRADO</font></td>
                            @else
                                <td>{{$ator['title']}}</td>
                            @endif    
                            <td><a href="/actor/form_edit/{{$ator['id']}}">Editar</a></td>
                            <td><a href="/actor/delete/{{$ator['id']}}">Excluir</a></td>     
                        </tr>
                    @endforeach
                @endif    
            </div>



        </form>
    </body>
</html>
