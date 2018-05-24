<?php

namespace SON\AbstractFactory;

class LivroPHP implements AbstractEditoraA
{
    public function getTitle()
    {
        return "PHP essencial";
    }

    public function getAuthor()
    {
        return "Fulano de tal";
    }
}