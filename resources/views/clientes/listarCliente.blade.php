@extends('dashboard')

@section('titulo')
    Cliente
@endsection
@section('subtitulo')
    Listagem de Clientes
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
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <th scope="row">{{ $cliente->id }}</th>
                    <td>  {{ $cliente->nome }} </td>
                    <td>{{ $cliente->telefone }} </td>
                    <td>{{ $cliente->endereco }} </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
