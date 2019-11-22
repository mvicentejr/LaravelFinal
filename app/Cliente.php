<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['id', 'nome', 'cpf', 'endereco', 'datanasc'];

    public function itens()
    {
        return $this->hasMany('App\ItensVenda');
    }

}
