<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function servicos()
    {
        return $this->hasMany('App\Service');
    }
}
