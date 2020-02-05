<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member_Model extends Model
{
    public function __construct() {
        $this->table = config('tables.tblCarSave');
        
     }

}

