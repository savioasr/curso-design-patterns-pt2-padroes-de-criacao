<?php

require __DIR__."/../vendor/autoload.php";

$mysql = new SON\Builder\MySqlBuilder;

$result = (new SON\Builder\Director($mysql))->getQuery('users');

var_dump($result->getQuery());

