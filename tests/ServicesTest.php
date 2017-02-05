<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ServicesTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions;
    use DatabaseMigrations;
    /**
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testCreateService()
    {
        $cliente = new \App\Cliente();
        $cliente->rsocial = "Razão social do Test";
        $cliente->save();

        $service = new \App\Service();
        $service->id_cliente = $cliente->id;
        $service->service = 'Serviço do Test';
        $service->data = date('Y-m-d', strtotime(str_replace('/','-','10/08/2016')));
        $service->reforco = date('Y-m-d', strtotime(str_replace('/','-','10/01/2017')));
        $service->vencimento = date('Y-m-d', strtotime(str_replace('/','-','10/02/2017')));
        $service->notafiscal = '1000';
        $service->save();

        $this->seeInDatabase('services', ['notafiscal'=>'1000']);
        $this->seeInDatabase('services', ['service'=>'Serviço do Test']);
        $this->seeInDatabase('services', ['id_cliente'=>$cliente->id]);


        $this->assertTrue(true);
    }

}
