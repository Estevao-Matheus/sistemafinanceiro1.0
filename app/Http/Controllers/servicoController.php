<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoFormRequest;
use App\Servico;
use Illuminate\Http\Request;

class servicoController extends Controller
{
    //
    public function listar(Request $request) {

        $servicos = Servico::query()
            ->orderBy('id')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('servicos/listarServico', compact('series', 'mensagem'));
    }

    public function index()
    {
        return view('servicos/cadastroServico');
    }

    public function store(ServicoFormRequest $request)
    {
        $servico = Servico::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Serviço {$servico->id} criado com sucesso {$servico->nome}"
            );


        return redirect()->route('listar_servicos');



    }
}
