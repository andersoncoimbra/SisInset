@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        <div class="panel-primary col-md-6">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Todos os serviços</div>
                            <div class="panel-body">
                            </div>
                            <!-- Table -->
                            <table class="table">
                                <tr><th>Cliente</th><th>Serviço</th><th>Vencimento</th></tr>
                                @forelse($services as $service)
                                    <tr><td>{{$clientes->find($service->id_cliente)->rsocial}}</td><td>{{$service->service}}</td><td>{{date('d/m/Y', strtotime(str_replace('-','/',$service->vencimento)))}}</td></tr>
                                @empty
                                    <tr><td>Sem Registro</td></tr>
                                @endforelse
                            </table>
                            <div class="panel-footer">
                                <span> Total de {{$services->count()}}</span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
