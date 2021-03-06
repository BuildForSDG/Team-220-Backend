<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptoms extends Model
{
     //to determine if eloquent create column crete_at and update_at 
    //in the database table
    public $timestamps = false;

    public function users()
    {
        return $this->belongToMany('App\User');
    }
}
