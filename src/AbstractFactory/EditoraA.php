<?php

namespace SON\AbstractFactory;

class EditoraA implements AbstractFactory
{
    private $linguagem;
    private $banco;

    public function __construct()
    {
        $this->linguagem = new LivroPHP;
        $this->banco = new LivroMysql;
    }

    public function makeLivroLinguagem()
    {
        return $this->linguagem;
    }

    public function makeLivroBanco()
    {
        return $this->banco;
    }
}