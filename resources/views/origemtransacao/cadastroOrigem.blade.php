@extends('dashboard')

@section('titulo')
    Cliente
@endsection
@section('subtitulo')
    Cadastro de Origem Transação
@endsection
@section('content')
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 "></div>
            <div class="col-md-3 " style="background-color:#efeff5;">
                <br/>
                <h2>Cadastro de Origem de Transação</h2>

                <form class="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome"  >
                    </div>

                    <div class="form-group">
                        <label for="endereco"> Descrição:</label>
                        <input type="text" class="form-control" id="descricao" placeholder="Digite o endereco" name="descricao" >

                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
                <br/>
            </div>
        </div>
    </div>

    </body>

@endsection
