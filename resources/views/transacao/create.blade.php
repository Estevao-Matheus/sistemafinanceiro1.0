@extends('dashboard')

@section('titulo')
    Transações
@endsection
@section('subtitulo')
    Cadastro de Transações
@endsection
@section('content')
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 "></div>
            <div class="col-md-3 " style="background-color:#efeff5;">
                <br/>
                <h2>Cadastro de Transação</h2>

                <form class="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome"> Nome: </label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome"  >
                    </div>

                    <div class="form-group">
                        <label for="descricao"> Descrição</label>
                        <input type="text" class="form-control" id="descricao" placeholder="Digite a descrição" name="descricao" >

                    </div>

                    <div class="form-group">
                        <label for="tipo"> Tipo:</label>
                        <input type="text" class="form-control" id="tipo" placeholder="Digite o tipo" name="tipo" >

                    </div>

                    <div class="form-group">
                        <label for="valorPrevisto"> Valor Previsto:</label>
                        <input type="text" class="form-control" id="valorPrevisto" placeholder="Digite o valor previsto" name="valorPrevisto" >

                    </div>

                    <div class="form-group">
                        <label for="valorRecebido"> Valor Recebido:</label>
                        <input type="text" class="form-control" id="valorRecebido" placeholder="Digite o valor recebido" name="valorRecebido" >

                    </div>

                    <div class="form-group">
                        <label for="data"> Data:</label>
                        <input type="text" class="form-control" id="data" placeholder="Digite a data" name="data" >

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