@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Novo Cliente</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/registrarservico">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="cliente" class="col-md-4 control-label">Cliente</label>

                                <div class="col-md-6">
                                    <select id="cliente"  class="form-control" name="cliente" required >
                                        <option value="">Selecione</option>
                                        @foreach($clientes as  $cliente)
                                            <option value="{{$cliente->id}}">{{$cliente->rsocial}}</option>
                                        @endforeach
                                    </select>


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="service" class="col-md-4 control-label">Serviço</label>
                                <div class="col-md-6">
                                    <input id="service" type="text" class="form-control" name="service" >


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="data" class="col-md-4 control-label">Data</label>
                                <div class="col-md-6">
                                    <input id="data" type="datetime" class="form-control" name="data">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="vencimento" class="col-md-4 control-label">Vencimento</label>

                                <div class="col-md-6">
                                    <input id="vencimento" type="text" class="form-control" name="vencimento" >


                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Registrar
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection