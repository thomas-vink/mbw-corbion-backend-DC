<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scanpoint extends Model
{
    public function scandepartment()
    {
        return $this->belongsTo('App\Post');
    }
}
