@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Novo Cliente</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/novocliente">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="rsocial" class="col-md-4 control-label">Razão Social</label>

                                <div class="col-md-6">
                                    <input id="rsocial" type="text" class="form-control" name="rsocial">


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nfantasia" class="col-md-4 control-label">Nome Fantasia</label>

                                <div class="col-md-6">
                                    <input id="nfantasia" type="text" class="form-control" name="nfantasia" >

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cnpj" class="col-md-4 control-label">Cnpj</label>

                                <div class="col-md-6">
                                    <input id="cnpj" type="text" class="form-control" name="cnpj" >

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="insmunicipal" class="col-md-4 control-label">Inscrição Municipal</label>

                                <div class="col-md-6">
                                    <input id="insmunicipal" type="text" class="form-control" name="insmunicipal">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="insestadual" class="col-md-4 control-label">Inscrição Estual</label>

                                <div class="col-md-6">
                                    <input id="insestadual" type="text" class="form-control" name="insestadual" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="endereco" class="col-md-4 control-label">Endereço</label>

                                <div class="col-md-6">
                                    <input id="endereco" type="text" class="form-control" name="endereco" >

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="bairro" class="col-md-4 control-label">Bairro</label>

                                <div class="col-md-6">
                                    <input id="bairro" type="text" class="form-control" name="bairro" >


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="municipio" class="col-md-4 control-label">Municipio</label>

                                <div class="col-md-6">
                                    <input id="municipio" type="text" class="form-control" name="municipio" >


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cep" class="col-md-4 control-label">Cep</label>

                                <div class="col-md-6">
                                    <input id="cep" type="text" class="form-control" name="cep" >


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="estado" class="col-md-4 control-label">Estados</label>

                                <div class="col-md-6">
                                    <select id="estado" type="estado" class="form-control" name="estado" >
                                        <option value="">Selecione</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espirito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telefone" class="col-md-4 control-label">Telefone</label>
                                <div class="col-md-6">
                                    <input id="telefone" type="text" class="form-control" name="telefone" >


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contato" class="col-md-4 control-label">Contato</label>
                                <div class="col-md-6">
                                    <input id="contato" type="text" class="form-control" name="contato">


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" >


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="obs" class="col-md-4 control-label">Observações</label>

                                <div class="col-md-6">
                                    <input id="obs" type="text" class="form-control" name="obs" >

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