<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rsocial',50);
            $table->string('cnpj',20);
            $table->string('nfantasia',50);
            $table->string('insmunicipal',20);
            $table->string('insestadual',20);
            $table->string('endereco',40);
            $table->string('bairro',20);
            $table->string('municipio',20);
            $table->string('cep',10);
            $table->string('estado',2);
            $table->string('telefone',20);
            $table->string('contato',20);
            $table->string('email',40);
            $table->string('obs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
