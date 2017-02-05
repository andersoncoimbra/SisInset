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
                            <div class="panel-heading">Serviços que estão vencendo</div>
                            <div class="panel-body">
                            </div>
                            <!-- Table -->
                            <table class="table">
                                <tr><th>Cliente</th><th>Serviço</th><th>Vencimento</th></tr>
                                <tr><td>Nome do Cliente 1</td><td>Serviços 1</td><td>Data de Vencimento</td></tr>
                                <tr><td>Nome do Cliente 2</td><td>Serviços *</td><td>Data de Vencimento</td></tr>
                                <tr><td>Nome do Cliente 3</td><td>Serviços 8</td><td>Data de Vencimento</td></tr>
                                <tr><td>Nome do Cliente 7</td><td>Serviços 5</td><td>Data de Vencimento</td></tr>
                                <tr><td>Nome do Cliente 4</td><td>Serviços 5</td><td>Data de Vencimento</td></tr>
                                <tr><td>Nome do Cliente 5</td><td>Serviços 4</td><td>Data de Vencimento</td></tr>
                                <tr><td>Nome do Cliente 1</td><td>Serviços 3</td><td>Data de Vencimento</td></tr>
                            </table>
                            <div class="panel-footer">
                                <a href="#"> Mais...</a>
                            </div>

                        </div>

                        <div class="panel-success col-md-6">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Menu</div>
                            <div class="panel-body">
                                <p><a href="/novocliente"><button class="btn btn-primary" >Novo Cliente</button></a></p>
                                <p><a href="/#"><button>Registrar Serviço</button></a></p>
                                <p><a href="/#"><button >Registrar Reforço</button></a></p>
                                <p><a href="/#"><button >Cliente</button></a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
