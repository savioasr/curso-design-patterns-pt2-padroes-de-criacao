<?php

namespace SON\AbstractFactory;

class LivroMongodb implements AbstractEditoraB
{
    public function getTitle()
    {
        return "MongoDB";
    }

    public function getAuthor()
    {
        return "Savio";
    }

    public function getPages()
    {
        return "300 pages";
    }
}