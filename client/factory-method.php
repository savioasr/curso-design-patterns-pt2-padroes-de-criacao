<?php

require __DIR__."/../vendor/autoload.php";

$circle = new SON\FactoryMethod\Circle;

$factoryMethod = new SON\FactoryMethod\ConcreteCreator();

$circle = $factoryMethod->factoryMethod($circle);

var_dump($circle->getImage());