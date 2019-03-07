<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{

  protected $fillable=[

    "descricao"

];
 public function produtos()
{
    return $this->hasMany('App\Produtos');
}
}
