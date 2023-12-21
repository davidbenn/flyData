<?php 

namespace Electron\Database;

use Electron\Contracts\Database\Interceptor as InterceptorContract;
use Dotenv\Dotenv;

abstract class Interceptor implements InterceptorContract {

    private array $connection = [];

    /**
     * Create new Interceptor instance.
     */

    public function __construct(){

        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
 
        if(!$dotenv->load()){
            throw new \Exception('Error loading .env file not found!');
        }
        
        $this->setConfig(realpath(dirname(__DIR__, 2) . '/config/database.php'));

    }

    public function setConfig(string $path = null) : void {

        if($path && file_exists($path)){
            $this->connection = require $path;
        }
    }

    public function setConnection(string $connection) : void{
        $this->connection = [];
    }

}