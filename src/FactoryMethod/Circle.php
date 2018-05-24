<?php

namespace SON\FactoryMethod;

class Circle implements ProductInterface
{
    private $directory;

    public function getImage()
    {
        return $this->directory . '/circle.png';
    }

    public function setDirectory(string $directory)
    {
        $this->directory = $directory;
    }
}