<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class ScanDepartment extends Model
{
    public function scanpoints()
    {
        return $this->hasMany('App\Scanpoint');
    }
}