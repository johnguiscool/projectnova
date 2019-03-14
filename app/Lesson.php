<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $image, $textbox;

    public function dialogue()
    {
        return $this->belongsTo('App\Dialogue');
    }
}
