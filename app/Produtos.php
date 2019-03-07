<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{ protected $fillable=[

    "descricao","preco","cor","peso"

]; 
public function categoria()
{
    return $this->belongsTo('App\Categoria');
}

  
}
