<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Services extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_cliente',50);
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->string('service',25);
            $table->string('notafiscal')->nullable();
            $table->decimal('valor',7,2)->nullable();
            $table->dateTime('data');
            $table->dateTime('reforco');
            $table->dateTime('vencimento');
            $table->string('obs')->nullable();
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
        Schema::drop('services');
    }
}
