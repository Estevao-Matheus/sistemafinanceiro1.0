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
    <?php
        $date = date('m');
        echo $date;
    ?>
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
                <th scope="col">Total</th>


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
                                $receitas = ($receitas + $transacao->valorRecebido);
                                echo 'Receita ='.$receitas;
                            }
                            else {
                                $despesas = ($despesas + $transacao->valorRecebido);
                                echo 'Despesa ='.$despesas;
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
                    <td>
                        <?php 
                            $total = ($receitas-$despesas);
                            echo $total;
                        ?>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
<!--
    $mesAtual = date('m');
    $data = explode("/", $transacao->data);
    if($data[1] == $mesAtual)
    {
        echo 'Eh o atual';
    }
    else {
        echo 'Nao eh o atual';
    }
    
-->