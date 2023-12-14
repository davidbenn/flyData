<?php

declare(strict_types=1);

namespace Electron\Contracts\Database;

interface Interceptor
{
    public function setConfig(array $config = []) : void;

    public function setConnection(string $connection) : void;

   /*  public function getConnection();

    public function setQuery($query) : void;

    public function getQuery() : string|null;

    public function setBindings(array $bindings = []) : void;

    public function getBindings() : array; */

}