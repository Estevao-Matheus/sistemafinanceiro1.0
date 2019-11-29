@extends('dashboard')

@section('titulo')
    Transação
@endsection
@section('subtitulo')
    Listagem de Transações
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
                <th scope="col">Tipo</th>
                <th scope="col">Recorrente</th>
                <th scope="col">Valor Previsto</th>
                <th scope="col">Valor Recebido</th>
                <th scope="col">Data</th>


            </tr>
            </thead>
            <tbody>
            @foreach ($transacoes as $transacao)
                <tr>
                    <th scope="row">{{ $transacao->id }}</th>
                    <td>  {{ $transacao->nome }} </td>
                    <td>{{ $transacao->descricao }} </td>
                    <td>
                        <?php

                            if($transacao->tipo == 0)
                            {
                                echo 'Receita';
                            }
                            else {
                                echo 'Despesa';
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if($transacao->recorrente == '1')
                            {
                                echo 'Sim';
                            }
                            else {
                                echo 'Nao';
                            }
                          
                        ?>
                    </td>
                    <td>{{ $transacao->valorPrevisto }} </td>
                    <td>{{ $transacao->valorRecebido }} </td>
                    <td>{{ $transacao->data }} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop