@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        <div class="panel-primary col-md-7">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Serviços que estão vencendo</div>
                            <div class="panel-body">
                            </div>
                            <!-- Table -->
                            <table class="table">
                                <tr><th>Cliente</th><th>Serviço</th><th>Data</th><th>Vencimento</th></tr>
                                @forelse($services as $service)
                                    <tr><td>{{$clientes->find($service->id_cliente)->rsocial}}</td><td>{{$service->service}}</td><td>{{date('d/m/Y', strtotime(str_replace('-','/',$service->data)))}}</td><td>{{date('d/m/Y', strtotime(str_replace('-','/',$service->vencimento)))}}</td></tr>
                                @empty
                                    <tr><td>Sem Registro</td></tr>
                                @endforelse
                            </table>
                            <div class="panel-footer">
                                <a href="/todosservicos"> Mais...</a>
                            </div>

                        </div>

                        <div class="panel-success col-md-5">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Menu</div>
                            <div class="panel-body">
                                <p><a href="/novocliente"><button class="btn btn-primary" >Novo Cliente</button></a></p>
                                <p><a href="/registrarservico"><button class="btn btn-primary">Registrar Serviço</button></a></p>
                                <p><a href="/#"><button class="btn btn-primary">Registrar Reforço</button></a></p>
                                <p><a href="/#"><button class="btn btn-primary">Cliente</button></a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
