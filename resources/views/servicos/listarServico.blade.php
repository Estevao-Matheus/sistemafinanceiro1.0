@extends('dashboard')

@section('titulo')
    Serviços
@endsection
@section('subtitulo')
    Listagem de Serviços
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
            @foreach ($servicos as $servico)
                <tr>
                    <th scope="row">{{ $servico->id }}</th>
                    <td>  {{ $servico->nome }} </td>
                    <td>{{ $servico->descricao }} </td>
                    <td>{{ $servico->preco }} </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
