<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'id_cliente');
    }
}
