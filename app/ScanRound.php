<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScanRound extends Model
{
    public $timestamps = false;
    public function ScannedPoint()
    {
        return $this->belongsTo('App\ScannedPoint');
    }
}
