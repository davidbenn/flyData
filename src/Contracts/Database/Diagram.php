<?php 

namespace Electron\Contracts\Database;

interface Diagram
{
    public function join(string|callable $column, string $signal = '=', string $bindColumn): self;

    public function leftJoin(string|callable $column, string $signal = '=', string $bindColumn) : self;

    public function rightJoin(string|callable $column, string $signal = '=', string $bindColumn) : self;

    public function innerJoin(string|callable $column, string $signal = '=', string $bindColumn) : self;

    public function outerJoin(string|callable $column, string $signal = '=', string $bindColumn) : self;

    public function where(string|callable $column, string $signal = '=', string $bindColumn) : self;

    public function orWhere(string|callable $column, string $signal = '=', string $bindColumn) : self;

    public function get(): array;

    public function first(): object;

}