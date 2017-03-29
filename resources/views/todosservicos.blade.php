@extends('layouts.app')

@section('content')

    <div class="modal fade modalexcluirservicos" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">

                <form method="post" action="{{route('delete.servico')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="delete">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Apaga registro</h4>
                    </div>
                    <div class="modal-body">
                        Tem Certeza que quer deleta esse Serviços
                        <input name="idservico" id="idservico" type="hidden">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </div>
                </form>
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
                            <div class="panel-heading">Todos os serviços</div>
                            <div class="panel-body">
                            </div>
                            <!-- Table -->
                            <table class="table">
                                <tr><th>Cliente</th><th>Serviço</th><th>Vencimento</th></tr>
                                @forelse($services as $service)
                                    <tr>
                                        <td></td>
                                        <td>{{$service->service}}</td>

                                        <td>{{date('d/m/Y', strtotime(str_replace('-','/',$service->data)))}}</td>
                                        <td>{{date('d/m/Y', strtotime(str_replace('-','/',$service->vencimento)))}}</td>
                                        <td><i class="fa fa-trash red" aria-hidden="true" onclick="deleteService({{$service->id}})"></i></td>

                                    </tr>
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


@section('scripts')
    <script type="text/javascript">
        function deleteService(id)
        {
            $('.modalexcluirservicos').modal('show');
            document.getElementById("idservico").value = id;
        }
    </script>
@endsection