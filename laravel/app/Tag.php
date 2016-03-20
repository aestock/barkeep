<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function bartenders(){
        return $this->hasMany('App\Bartender');
    }
}
