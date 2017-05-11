<form class="form-horizontal" method="POST" action="{{route('post.renovarservico', ['id'=>$service->id])}}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="cliente" class="col-md-4 control-label">Cliente</label>

        <div class="col-md-6">
            {{$service->cliente->rsocial}}
        </div>

    </div>


    <div class="form-group">
        <label for="service" class="col-md-4 control-label">Serviço</label>
        <div class="col-md-6">
            <input id="service" type="text" class="form-control" name="service" value="{{$service->service}}">


        </div>
    </div>

    <div class="form-group">
        <label for="data" class="col-md-4 control-label">Data</label>
        <div class="col-md-6">
            <input id="data" type="date" class="form-control data"  placeholder="__/__/____" maxlength="10" name="data" value="{{date('d/m/Y', strtotime(str_replace('-','/',$service->data)))}}">

        </div>
    </div>

    <div class="form-group">
        <label for="vencimento" class="col-md-4 control-label">Vencimento</label>

        <div class="col-md-6">
            <input id="vencimento" type="date" class="form-control data"  placeholder="__/__/____" maxlength="10" name="vencimento"  value="{{date('d/m/Y', strtotime(str_replace('-','/',$service->vencimento)))}}">


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