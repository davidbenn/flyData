<?php 

namespace App\Models;

use Electron\Database\Model;

class User extends Model
{
    protected string $table = 'users';
    
    public function __construct()
    {
        parent::__construct();
    }
}