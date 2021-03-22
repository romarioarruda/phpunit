<?php

namespace App\b7web;

use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    
    public function testRetornaNomeCompleto()
    {
        $this->expectOutputString('Romário Arruda');

        $usuario = new Usuario();
        $usuario->setNome('Romário');
        $usuario->setSobreNome('Arruda');

        echo $usuario->getNomeCompleto();
    }


    public function testeRetornaIdadeUsuario()
    {
        $usuario = new Usuario();
        $usuario->setIdade(26);

        $this->assertEquals(26, $usuario->getIdade());
    }


    public function testRetornaCargoUsuario()
    {
        $this->markTestIncomplete('Falta implementar o set e get do cargo em Usuario.php.');
    }
}
