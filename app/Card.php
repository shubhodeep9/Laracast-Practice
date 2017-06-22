<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes()
    {
    	return $this->hasMany('App\Note');
    }

    public function path()
    {
    	return '/cards/' . $this->id;
    }
}
