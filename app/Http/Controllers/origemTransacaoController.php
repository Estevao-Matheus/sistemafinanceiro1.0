<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrigemTransacaoFormRequest;
use App\OrigemTransacao;
use Illuminate\Http\Request;

class origemTransacaoController extends Controller
{
    //
    public function listar(Request $request) {
        $origens = OrigemTransacao::query()
            ->orderBy('id')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('origemtransacao.listarOrigem', compact('origens', 'mensagem'));
    }

    public function index()
    {
        return view('origemtransacao/cadastroOrigem');
    }

    public function store(OrigemTransacaoFormRequest $request)
    {
        $origem = OrigemTransacao::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Série {$origem->id} criada com sucesso {$origem->nome}"
            );

        return redirect()->route('listar origens');
    }


}
