<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    /*public function dialogue()
    {
        return $this->hasOne('App\Dialogue')
    }*/

    public function textbox()
    {
        return $this->belongsTo('App\TextBox');
    }
}
