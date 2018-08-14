<html>
    <head>      
        <title>Listar Filmes do Genero</title>
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

        <div class="form-group col-6 m-auto">
                <h1 align="center">Listagem dos Filmes do Genero</h1>
                <table>
                <tr>
                    <th>ID do Genero</th>
                    <th>Tipo do Genero</th>
                    <th>ID do Genero do Filme</th>
                    <th>ID do Filme</th>
                    <th>Filme</th>
                    <th>Rating</th>
                    <th>Ranking</th>
                    <th>ID Ativo</th>
                    <th>Ativo</th>
                </tr>                
                @foreach($banana->movies as $genero)
                    <tr>
                        @if($genero['title'] == '')
                            <td><font color=red>NÃO EXISTE FILME PARA ESSE ID</font></td>
                        @else
                            <td>{{$banana->id}}</td>
                            <td>{{$banana->name}}</td>
                            <td>{{$genero->genre_id}}</td>                            
                            <td>{{$genero->id}}</td>
                            <td>{{$genero['title']}}</td>
                            <td>{{$genero['rating']}}</td>                            
                            <td>{{$banana->ranking}}</td>
                            <td>{{$banana->active}}</td>
                            <td>{{$banana->getIsActive()}}</td>                            

                            {{--
                            {{$genero->active}}
                            {{$genero->getIsActive()}}
                            {!! $genero->movies->implode('title', "<br>")!!}
                            --}}

                        @endif    
                    </tr>
                @endforeach
        </div>
    </body>
</html>
