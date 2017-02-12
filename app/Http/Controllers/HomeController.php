<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Cliente;
use App\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $clientes = Cliente::all();
        $service = Service::orderBy('vencimento', 'asc')->whereDate('vencimento','>=',date('Y-m-d'))->get();
        return view('home', ['services'=> $service, 'clientes'=>$clientes]);
    }
}
