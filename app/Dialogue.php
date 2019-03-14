<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dialogue extends Model
{
    public function dialogueline()
    {
        return $this->hasMany('App\Dialogue\DialogueLine');
    }
}
