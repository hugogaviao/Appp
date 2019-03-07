<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable=[

        "numero"
    
    ];
    public function User()
    {
        return $this->belongsTo('App\User');
    }

}
