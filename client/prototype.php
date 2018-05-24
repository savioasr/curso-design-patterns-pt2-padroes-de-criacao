<?php

require __DIR__."/../vendor/autoload.php";

$original = new SON\Prototype\ConcretePrototype;
$original->setTitle('PHP');
$original->setAuthor('Savio');

var_dump($original);

$clone1 = clone $original;
$original->setTitle('Node');

var_dump($original);