<?php

namespace SON\FactoryMethod;

interface ProductInterface
{
    public function getImage();

    public function setDirectory(string $directory);
}