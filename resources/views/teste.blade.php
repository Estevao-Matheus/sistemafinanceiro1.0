@extends('dashboard')

@section('titulo')
@endsection

@section('subtitulo')
@endsection

@section('content')
<body>
@foreach ($transacoes as $transacao)
<?php 
    $mesAtual = date('m');
    $data = explode("/", $transacao->data);
    if($transacao->recorrente == '1')
    {
        if($transacao->tipo == 0)
        {
            $receitas = ($receitas + $transacao->valorRecebido);
        }
        else {
            $despesas = ($despesas + $transacao->valorRecebido);
        }
        
    }
    else {
        if($transacao->tipo == 0)
        {
            if($data[1] == $mesAtual)
            {
                $receitas = ($receitas + $transacao->valorRecebido);
            }
        }
        else {
            if($data[1] == $mesAtual)
            {
                $despesas = ($despesas + $transacao->valorRecebido);
            }
        }
    }
?>
@endforeach
<div class= "cntainer-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="info-box bg-blue">
                <span class="info-box-icon"><i class="fa fa-file"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"> <h2>Receitas</h2></span>
                    <span class="info-box-number"> <h3>{{ $receitas }}</h3></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-file"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><h2>Despesas</h2></span>
                    <span class="info-box-number"> <h3>{{ $despesas }}</h3></span>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-file"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><h2>Saldo</h2></span>
                        <span class="info-box-number"> <h3>
                            <?php 
                                $total = ($receitas-$despesas);
                                echo $total;
                            ?>
                        </h3></span>
                    </div>
                </div>
        </div>

    </div>
</div>
</body>


@endsection