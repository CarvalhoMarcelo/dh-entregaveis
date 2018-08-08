<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Editar Ator</title>
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


        {{-- *** Exercico 2b *** --}}
        @if($atores['first_name'] != '') 
            @php 
                $nome = $atores['first_name']; 
                $sobrenome = $atores['last_name'];
                $classificacao = $atores['rating'];
                $id = $atores['id'];
            @endphp
        @else 
            @php 
                $nome = '';
                $sobrenome = '';
                $classificacao = '';
                $id = '';
            @endphp
        @endif

        <h1 align="center">Editar Ator</h1>
        <form action="/actor/edit/{{$id}}" id="editarAtor" name="editarAtor" method="Post">

            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="form-group col-6 m-auto">
                <label for="titulo">Nome</label>
                <input type="text" class="form-control" name="first_name" id="nome" value='{{$nome}}'/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Sobrenome</label>
                <input type="text" class="form-control" name="last_name" id="sobrenome" value='{{$sobrenome}}'/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="premios">Classificação</label>
                <input type="text" class="form-control" name="rating" id="classificacao" value='{{$classificacao}}'/>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
                <input type="submit" value="Editar Ator" name="submit" class="btn btn-primary"/>      
                <a href="/actors/true" class="btn btn-primary"/>Listar todos Atores</a>      
            </div>
        </form>

        <form action="/actor/delete/{{$id}}" method="post">
            {{csrf_field()}}    
            {{method_field('DELETE')}}
            <div class="form-group col-6 m-auto">
                <input type="submit" value="Apagar Ator" class="btn btn-primary">
            </div>
        </form>

    </body>
</html>
