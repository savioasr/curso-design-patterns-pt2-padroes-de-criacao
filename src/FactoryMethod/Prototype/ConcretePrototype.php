<?php

namespace SON\Prototype;

class ConcretePrototype
{
    public $title;
    public $author;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }
}