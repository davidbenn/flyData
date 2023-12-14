<?php 

namespace Electron\Database;

use Electron\Contracts\Database\Diagram as DiagramContract;
use Electron\Core\Connector;

abstract class Diagram extends Connector implements DiagramContract {
    protected string $table;
    private array $bindings;
    private array $join;

    public function join(string|callable $column, string $signal = '=', string $bindColumn) : self {

        if (is_callable($column)) {
            $this->bindings[] = $column();
        } else {
            $this->bindings[] = $column . ' ' . $signal . ' ' . $bindColumn;
        }

        return $this;
    }

    public function where(string|callable $column, string $signal = '=', string $bindColumn) : self {

        if (is_callable($column)) {
            $this->bindings[] = $column();
        } else {
            $this->bindings[] = $column . ' ' . $signal . ' ' . $bindColumn;
        }

        return $this;
    }

    public function orWhere(string|callable $column, string $signal = '=', string $bindColumn) : self {

        if (is_callable($column)) {
            $this->bindings[] = $column();
        } else {
            $this->bindings[] = $column . ' ' . $signal . ' ' . $bindColumn;
        }

        return $this;
    }


    public function leftJoin(string|callable $column, string $signal = '=', string $bindColumn) : self{
        return $this->join($column, $signal, $bindColumn);
    }

    public function rightJoin(string|callable $column, string $signal = '=', string $bindColumn) : self{
        return $this->join($column, $signal, $bindColumn);
    }

    public function innerJoin(string|callable $column, string $signal = '=', string $bindColumn) : self{
        return $this->join($column, $signal, $bindColumn);
    }

    public function outerJoin(string|callable $column, string $signal = '=', string $bindColumn) : self{
        return $this->join($column, $signal, $bindColumn);
    }

    public function get(): array{
        return $this->bindings;
    }

    public function first(): object{
        return new \stdClass;
    }

    public function toSql() : string {
        return 'SELECT * FROM ' . $this->table . ' WHERE ' . implode(' AND ', $this->bindings);
    }

}