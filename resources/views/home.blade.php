@extends('layouts.app')

@section('content')

    <div class="modal fade modalexcluirservicos" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p id="idservice"></p>Tem Ceteza deleta Serviços
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        <div class="panel-primary col-md-8">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Serviços que estão vencendo</div>
                            <div class="panel-body">
                            </div>
                            <!-- Table -->
                            <table class="table">
                                <tr><th>Cliente</th><th>Serviço</th><th>Data</th><th>Vencimento</th><th>Açoes</th></tr>
                                @forelse($services as $service)
                                    <tr><td>{{$clientes->find($service->id_cliente)->rsocial}}</td><td>{{$service->service}}</td><td>{{date('d/m/Y', strtotime(str_replace('-','/',$service->data)))}}</td><td>{{date('d/m/Y', strtotime(str_replace('-','/',$service->vencimento)))}}</td><td><i class="fa fa-trash red" aria-hidden="true" onclick="deleteService({{$service->id}})"></i></td></tr>
                                @empty
                                    <tr><td>Sem Registro</td></tr>
                                @endforelse
                            </table>
                            <div class="panel-footer">
                                <a href="/todosservicos"> Mais...</a>
                            </div>

                        </div>

                        <div class="panel-success col-md-4">
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

@section('scripts')
    <script type="text/javascript">
        function deleteService(id)
    {
        $('.modalexcluirservicos').modal('show');
        document.getElementById("idservice").innerHTML = id;
    }
    </script>
@endsection
