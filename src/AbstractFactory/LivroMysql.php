<?php

namespace SON\AbstractFactory;

class LivroMysql implements AbstractEditoraA
{
    public function getTitle()
    {
        return "Mysql para quem ouviu falar";
    }

    public function getAuthor()
    {
        return "João";
    }
}