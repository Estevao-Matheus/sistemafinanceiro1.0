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

            </tr>
            </thead>
            <tbody>
            @foreach ($origens as $origem)
                <tr>
                    <th scope="row">{{ $origem->id }}</th>
                    <td>  {{ $origem->nome }} </td>
                    <td>{{ $origem->descricao }} </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
