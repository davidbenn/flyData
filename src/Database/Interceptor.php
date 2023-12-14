<?php 

namespace Electron\Database;

use Electron\Contracts\Database\Interceptor as InterceptorContract;
use Dotenv\Dotenv;

abstract class Interceptor extends Dotenv implements InterceptorContract {

    private array $connection = [];

    /**
     * Create new Interceptor instance.
     */

    public function __construct()
    {
        $this->createImmutable(__DIR__);

        $this->connection = $this->load();

        var_dump($this->load(), 'aqq');

        exit;
    }

    public function setConfig(array $config = []) : void{
        $this->connection = $config;
    }

    public function setConnection(string $connection) : void{
        $this->connection = [];
    }

}