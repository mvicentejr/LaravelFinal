<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItensVenda extends Model
{
    protected $fillable = ['id', 'venda', 'produto', 'quantidade', 'total', 'venda_id', 'produto_id'];

    public function venda()
    {
        return $this->belongsTo('App\Venda');
    }

    public function produto()
    {
        return $this->belongsTo('App\Produto');
    }
}
