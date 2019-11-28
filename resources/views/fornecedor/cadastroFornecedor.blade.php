@extends('dashboard')

@section('titulo')
    Cliente
@endsection
@section('subtitulo')
    Cadastro de Fornecedores
@endsection
@section('content')
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 "></div>
            <div class="col-md-3 " style="background-color:#efeff5;">
                <br/>
                <h2>Cadastro de Fornecedores</h2>

                <form class="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome"  >
                    </div>

                    <div class="form-group">
                        <label for="cnpj"> CNPJ: </label>
                        <input type="text" class="form-control" id="cnpj" placeholder="Digite o CNPJ" name="cnpj" >

                    </div>

                    
                    <div class="form-group">
                        <label for="telefone"> Telefone: </label>
                        <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone" name="telefone" >

                    </div>

                    
                    <div class="form-group">
                        <label for="endereco"> Endereço: </label>
                        <input type="text" class="form-control" id="endereco" placeholder="Digite o endereco" name="endereco" >

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
