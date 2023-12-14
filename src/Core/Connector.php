<?php 


namespace Electron\Core;

use Electron\Contracts\Database\Connector as ConnectorContract;
use Electron\Database\Interceptor;

abstract class Connector extends Interceptor implements ConnectorContract {

    public function __construct()
    {
        parent::__construct();
    }

    public static function connect()
    {
        echo "Connect";
    }

    public static function disconnect()
    {
        echo "Disconnect";
    }

    public static function reconnect()
    {
        echo "Reconnect";
    }

}