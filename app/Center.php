<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
     //to determine if eloquent create column create_at and update_at 
    //in the database table
    public $timestamps = false;

    public function testimonies()
    {
        return $this->hasMany('App\Testimonie');

    }
    
    public function professional()
    {
        return $this->hasMany('App\Professional');

    }
}
