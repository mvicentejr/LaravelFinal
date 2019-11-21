<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['id', 'descricao', 'quantidade', 'valor', 'itens'];

    public function itens()
    {
        return $this->hasMany('App\ItensVenda');
    }
}
