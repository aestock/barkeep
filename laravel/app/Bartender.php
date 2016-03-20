<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bartender extends Model
{
    public function bartenders(){
        return $this->belongsTo('App\Restaurant');
    }
    public function cocktails(){
        return $this->belongsToMany('App\Cocktail')->withPivot('vote')->withTimestamps();
    }
    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
