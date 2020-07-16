<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fstock extends Model
{
    protected  $guarded=[];

    public function article()
    {
        $this->belongsTo('Article::class');
    }

     public function boutique()
    {
        $this->belongsTo('Boutique::class');
    }

     public function fournisseur()
    {
        $this->belongsTo('Fournisseur::class');
    }

     public function client()
    {
        $this->belongsTo('Client::class');
    }
}
