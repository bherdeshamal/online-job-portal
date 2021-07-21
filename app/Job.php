<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function orders()
    {
        return $this->hasMany('App\User','id');
    }

}
