<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Caixa;

class MeuPrimeiroTest extends TestCase
{
    
    public function testCaixaContemItem(){
        $caixa = new Caixa(['carro', 'mochila', 'garfo']);

        $this->assertTrue($caixa->contem('mochila'));
        $this->assertFalse($caixa->contem('cubo mágico'));
    }

    public function testCaixaContemUmItem(){
        $caixa = new Caixa(['lençol']);

        $this->assertEquals('lençol', $caixa->pegarUm());
        $this->assertNull($caixa->pegarUm());
    }

    public function testComecaComLetra(){
        $caixa = new Caixa(['cooler', 'mouse', 'fone', 'celular', 'computador']);

        $resultados = $caixa->comecaCom('c');

        $this->assertCount(3, $resultados);
        $this->assertContains('cooler', $resultados);
        $this->assertContains('celular', $resultados);
        $this->assertContains('computador', $resultados);

        $this->assertEmpty($caixa->comecaCom('s'));
    }
}
