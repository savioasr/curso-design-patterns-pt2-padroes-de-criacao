<?php

require __DIR__."/../vendor/autoload.php";

$abstract_factory = new SON\AbstractFactory\EditoraA;

$livro_php = $abstract_factory->makeLivroLinguagem();

echo $livro_php->getTitle()."\n";
echo $livro_php->getAuthor()."\n";