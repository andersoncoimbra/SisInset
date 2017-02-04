<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClienteTest extends TestCase
{
   use WithoutMiddleware;
   use DatabaseTransactions;
   use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNovoCliente()
    {
        $this->visit('/novocliente')
            ->see('Novo Cliente')
            ->type('RAZÃO SOCIAL','rsocial')
            ->type('Nome Fantasial','nfantasia')
            ->type('CNPJ','cnpj')
            ->type('Inscrição Municipal','insmunicipal')
            ->type('Inscrição Estadual','insestadual')
            ->type('Endereço','endereco')
            ->type('Bairro','bairro')
            ->type('Municipio','municipio')
            ->type('Cep','cep')
            ->select('PA','estado')
            ->type('TeleFone','telefone')
            ->type('Contato','contato')
            ->type('Email','email')
            ->type('Observações','obs')
            ->press('Registrar');

        $this->seeInDatabase('clientes', ['rsocial'=>'RAZÃO SOCIAL']);
        $this->seeInDatabase('clientes', ['cnpj'=>'CNPJ']);

        $this->assertTrue(true);
    }
}
