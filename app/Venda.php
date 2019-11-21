<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = ['id', 'cliente', 'datavenda', 'itens'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function itens()
    {
        return $this->hasMany('App\ItensVenda');
    }
}
