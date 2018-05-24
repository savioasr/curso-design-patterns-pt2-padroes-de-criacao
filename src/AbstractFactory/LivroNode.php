<?php

namespace SON\AbstractFactory;

class LivroNode implements AbstractEditoraB
{
    public function getTitle()
    {
        return "Node, Javascript";
    }

    public function getAuthor()
    {
        return "Erik";
    }

    public function getPages()
    {
        return "200 pages";
    }
}