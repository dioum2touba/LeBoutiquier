<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
   protected $guarded=[];

    public function fstock()
    {
        $this->hasMany('Fstock::class');
    }
