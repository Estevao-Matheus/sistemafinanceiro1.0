@extends('dashboard')

@section('titulo')
   Produtos
@endsection
@section('subtitulo')
    Listar Produtos
@endsection

@section('content')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <th scope="row">{{ $produto->id }}</th>
                    <td>  {{ $produto->nome }} </td>
                    <td>{{ $produto->descricao }} </td>
                    <td>{{ $produto->preco }} </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
