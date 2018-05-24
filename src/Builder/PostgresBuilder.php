<?php

namespace SON\Builder;

class PostgresBuilder implements BuilderInterface
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
        $this->query->query = Product::POSTGRES_QUERY;
    }

    public function getQuery()
    {
        return $this->query->getQuery();
    }
}