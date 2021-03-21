<?php

namespace App\b7web;

use PHPUnit\Framework\TestCase;

class ArquivoTest extends TestCase
{
    /**
    * @test
    * @verificandoFalhaIncludeConfig
    */
    public function verificandoFalhaIncludeConfig()
    {
        $filepath = "config.php";

        $this->assertTrue(file_exists($filepath));
    }
}
