<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
    </head>
    <body>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 align="center">Formulário Filmes</h1>
        <form action="/filmes/adicionar" id="adicionarFilme" name="adicionarFilme" method="POST">

            {{csrf_field()}}
            
            {{--
                {{method_field('POST')}}
            --}}


            <div class="form-group col-6 m-auto">
                <label for="titulo">Título</label>                
                <input type="text" class="form-control" name="title" id="titulo" value="{{old('title')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" name="rating" id="classificacao" value="{{old('rating')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="premios">Prêmios</label>
                <input type="text" class="form-control" name="awards" id="premios" value="{{old('awards')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="duracao">Duração</label>
                <input type="text" class="form-control" name="length" id="duracao" value="{{old('length')}}"/>
            </div>
            
            <br>
            <div class="form-group col-6 m-auto">
                <label>Data de estreia</label>
                <input type="date" name="release_date" id="" valeu"{{old('release_date')}}">
            </div>            

            <br>
            <div class="form-group col-6 m-auto">         
                <label for="filmes">Lista de Generos</label>   
                <select name="genre_id" class="form-control">
                    @foreach($banana as $genero)
                        <option value="{{$genero['id']}}" name="genre_id" value="{{old('genre_id')}}">
                                {{$genero['name']}}
                        </option>
                    @endforeach
                </select>
            </div>            

            <br><p></p>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
