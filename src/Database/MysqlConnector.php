<?php 

namespace Electron\Database;

readonly class MysqlConnector
{
    public static function getConnection() : string{
        return "mysql";
    }
}