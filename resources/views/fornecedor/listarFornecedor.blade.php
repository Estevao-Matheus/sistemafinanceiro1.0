@extends('dashboard')

@section('titulo')
    Fornecedor
@endsection
@section('subtitulo')
    Listagem de Fornecedor
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
                <th scope="col">CNPJ</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($fornecedores as $fornecedor)
                <tr>
                    <th scope="row">{{ $fornecedor->id }}</th>
                    <td>{{ $fornecedor->nome }} </td>
                    <td>{{ $fornecedor->cnpj }} </td>
                    <td>{{ $fornecedor->telefone }} </td>
                    <td>{{ $fornecedor->endereco }} </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
