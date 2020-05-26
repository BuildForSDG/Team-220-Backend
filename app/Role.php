<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     //to determine if eloquent create column crete_at and update_at 
    //in the database table
    public $timestamps = false;
}
