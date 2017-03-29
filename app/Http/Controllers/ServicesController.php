<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Service;
use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getnovo()
    {
        $clientes = Cliente::all();
        return view('cliente.servico.novo',['clientes'=>$clientes]);
    }

    public function postnovo(Request $request)
    {
        //dd($request);
        $service = new Service();
        $service->id_cliente = $request->cliente;
        $service->service = $request->service;
        $service->data = date('Y-m-d', strtotime(str_replace('/','-',$request->data)));
        $service->vencimento = date('Y-m-d', strtotime(str_replace('/','-',$request->vencimento)));
        $service->save();

        return redirect()->route('home');

    }

    public function deleteservico(Request $request)
    {
        //dd($request->all());
        $service = Service::find($request->idservico);
        $service->delete();
        return redirect()->route('home');

    }
    public function todosservicos()
    {

        $service = Service::orderBy('vencimento', 'asc')->whereDate('vencimento','<=',date('Y-m-d'))->get();
        //dd($service->first()->cliente->rsocial);

        return view('todosservicos', ['services'=> $service]);
    }

}
