<?php

namespace SON\FactoryMethod;

class Triangle implements ProductInterface
{
    private $directory = '/root';

    public function getImage()
    {
        return $this->directory . '/triangle.png';
    }

    public function setDirectory(string $directory)
    {
        $this->directory .= $directory;
    }
}