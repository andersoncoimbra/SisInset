<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Service;
use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
{
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

    public function todosservicos()
    {
        $clientes = Cliente::all();
        $service = Service::orderBy('vencimento', 'asc')->whereDate('vencimento','<=',date('Y-m-d'))->get();
        return view('todosservicos', ['services'=> $service, 'clientes'=>$clientes]);
    }
}
