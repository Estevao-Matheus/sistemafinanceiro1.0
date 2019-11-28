<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\ClienteFormRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index(Request $request)
    {

          return view('clientes/cadastrocliente');
    }
    public function listar(Request $request) {
        $clientes = Cliente::query()
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('clientes.listarCliente', compact('clientes', 'mensagem'));
    }
    public function store(ClienteFormRequest $request)
    {
        $cliente = Cliente::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Cliente {$cliente->id} criada com sucesso {$cliente->nome}"
            );

        return redirect()->route('listar clientes');
    }

}
