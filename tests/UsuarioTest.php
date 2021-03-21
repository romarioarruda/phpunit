<?php

namespace App\b7web;

use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    /**
    * @test
    * @retornaNomeCompleto
    */
    public function retornaNomeCompleto()
    {
        $this->expectOutputString('Romário Arruda');

        $usuario = new Usuario();
        $usuario->setNome('Romário');
        $usuario->setSobreNome('Arruda');

        echo $usuario->getNomeCompleto();
    }

    /**
    * @test
    * @retornaIdadeUsuario
    */
    public function retornaIdadeUsuario()
    {
        $usuario = new Usuario();
        $usuario->setIdade(26);

        $this->assertEquals(26, $usuario->getIdade());
    }

    /**
    * @test
    * @retornaCargoUsuario
    */
    public function retornaCargoUsuario()
    {
        $this->markTestIncomplete('Falta implementar o set e get do cargo em Usuario.php.');
    }
}
