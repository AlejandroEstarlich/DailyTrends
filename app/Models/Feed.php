<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feed extends Model
{
    use HasFactory;

    // Relacionamos el modelo con la tabla
    protected $table = 'Feed';

    // Relación Muchos a uno con el user (Publisher cuando crea un artículo), relaciona un modelo con otro
    public function user(){
        return $this->belongsTo('App\Models\User', 'publisher');
    }
}