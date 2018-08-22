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

        @guest
            <h1 align="center">Você não está logado!</h1>   
            <br><p></p>
            <div class="form-group col-2 m-auto">
                <div class='d-inline'><a href="login" class="btn btn-primary" style="float:left;">Fazer Login</a></div>
                <div class='d-inline'><a href="/" class="btn btn-primary" style="float:right;">Voltar</a></div>
            </div>    
        @else

            @if($sucesso)
                <font color=red><h1 align="center">Filme adicionado com sucesso!!!</h1></font>                      
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
                <div class="form-group col-6 m-auto">
                        <label for="revenue">Revenue</label>
                        <input type="text" class="form-control" name="revenue" id="revenue" value="{{old('revenue')}}"/>
                    </div>                   
                <br>     
                <div class="form-group col-6 m-auto">
                        <label for="director_id">Director_ID</label>
                        <input type="text" class="form-control" name="director_id" id="director_id" value="{{old('director_id')}}"/>
                    </div>                   
                <br>     

                <br><p></p>
                <div class="form-group col-6 m-auto">
                    <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
                    <div class='d-inline'><a href="/" class="btn btn-primary" style="float:right;">Voltar</a></div>
                </div>
            </form>
        @endguest        
    </body>
</html>
