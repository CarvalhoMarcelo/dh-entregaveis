@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (Route::has('login'))
                        <div class="alert alert-success" role="alert">                    
                            {{"Bem vindo " }} <font color=red> {{Auth::user()->name }} </font>
                            <br>
                            {{"Seu email é: "}} <font color=blue> {{Auth::user()->email}} </font> 
                            {{" e seu telefone é "}} <font color=black> {{Auth::user()->phone}} </font>
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
                        {{"Você está logado!!!!"}}
                        <div class='d-inline'><a href="/" class="btn btn-primary" style="float:right;">Voltar</a></div>                        
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
