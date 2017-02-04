<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

use App\Http\Requests;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Função get para Novo cliente
    public function getnovo()
    {
        return view('cliente.novo');
    }

    public function postnovo(Request $request)
    {
        $cliente = new Cliente();
        $cliente->rsocial = $request->rsocial;
        $cliente->cnpj = $request->cnpj;
        $cliente->nfantasia = $request->nfantasia;
        $cliente->insmunicipal = $request->insmunicipal;
        $cliente->insestadual = $request->insestadual;
        $cliente->endereco = $request->endereco;
        $cliente->bairro = $request->bairro;
        $cliente->municipio = $request->municipio;
        $cliente->cep = $request->cep;
        $cliente->estado = $request->estado;
        $cliente->telefone = $request->telefone;
        $cliente->contato = $request->contato;
        $cliente->email = $request->email;
        $cliente->obs = $request->obs;

        $cliente->save();

        return redirect()->route('get.novocliente');
    }
}
