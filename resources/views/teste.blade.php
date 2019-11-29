@extends('dashboard')

@section('titulo')
@endsection

@section('subtitulo')
@endsection

@section('content')
<body>
<div class= "cntainer-fluid">
    <div class="row">
    <div class="col-md-6">
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-file"></i></span>
            <div class="info-box-content">
                <span class="info-box-text"> <h2>Receitas</h2></span>
                <span class="info-box-number"> <h3>25000</h3></spam>
            </div>
  
        </div>
    </div>
    <div class="col-md-6">
        <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-file"></i></span>
            <div class="info-box-content">
                <span class="info-box-text"><h2>Despesas</h2></span>
                <span class="info-box-number"> <h3>25000</h3></spam>
            </div>
        </div>
    </div>
    </div>
</div>
</body>


@endsection