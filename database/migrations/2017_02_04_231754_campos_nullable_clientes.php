<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CamposNullableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //
            $table->string('cnpj',20)->nullable()->change();
            $table->string('nfantasia',50)->nullable()->change();
            $table->string('insmunicipal',20)->nullable()->change();
            $table->string('insestadual',20)->nullable()->change();
            $table->string('endereco',40)->nullable()->change();
            $table->string('bairro',20)->nullable()->change();
            $table->string('municipio',20)->nullable()->change();
            $table->string('cep',10)->nullable()->change();
            $table->string('estado',2)->nullable()->change();
            $table->string('telefone',20)->nullable()->change();
            $table->string('contato',20)->nullable()->change();
            $table->string('email',40)->nullable()->change();
            $table->string('obs')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //
            $table->string('cnpj',20)->change();
            $table->string('nfantasia',50)->change();
            $table->string('insmunicipal',20)->change();
            $table->string('insestadual',20)->change();
            $table->string('endereco',40)->change();
            $table->string('bairro',20)->change();
            $table->string('municipio',20)->change();
            $table->string('cep',10)->change();
            $table->string('estado',2)->change();
            $table->string('telefone',20)->change();
            $table->string('contato',20)->change();
            $table->string('email',40)->change();
            $table->string('obs')->change();
        });
    }
}
