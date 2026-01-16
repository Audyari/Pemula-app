<?php

namespace App\Services\Riak;

class Connection
{
    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function connect()
    {
        return "Terhubung ke Riak di {$this->config['host']}:{$this->config['port']}";
    }
}
