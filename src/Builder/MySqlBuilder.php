<?php

namespace SON\Builder;

class MySqlBuilder implements BuilderInterface
{
    private $query;

    public function __construct()
    {
        $this->query = new Product;
    }

    public function setTable(string $table)
    {
        $this->query->table = $table;
    }

    public function setQuery()
    {
        $this->query->query = Product::MYSQL_QUERY;
    }

    public function getQuery()
    {
        return $this->query->getQuery();
    }
}