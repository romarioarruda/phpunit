<?php

namespace App\b7web;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $idade;


    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setSobreNome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function getNomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getIdade()
    {
        return $this->idade;
    }
}
