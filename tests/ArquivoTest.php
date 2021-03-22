<?php

namespace App\b7web;

use PHPUnit\Framework\TestCase;

class ArquivoTest extends TestCase
{

    public function testVerificandoFalhaIncludeConfig()
    {
        $filepath = "config.php";

        $this->assertFileExists($filepath);
    }
}
