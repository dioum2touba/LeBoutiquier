<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
   protected $guarded=[];

    public function fstock()
    {
        $this->hasMany('Fstock::class');
    }
}
