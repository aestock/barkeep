<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    public function flavors(){
        return $this->belongsTo('App\Flavor');
    }
    public function spirits(){
        return $this->belongsTo('App\Spirit');
    }
    public function categories(){
        return $this->belongsTo('App\Category', 'categories');
    }
    public function bartenders(){
        return $this->belongsToMany('App\Bartender')->withPivot('vote')->withTimestamps();
    }
}
