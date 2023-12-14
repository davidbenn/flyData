<?php

namespace Electron\Support;

use Electron\Contracts\Support\Stringable;
use Electron\Database\Diagram;

class DB extends Diagram {

    public function table(string $name){
        $this->table = $name;
        return $this;
    }
    
}