<?php

namespace App\Models\core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venda extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="vendas";
    protected $primaryKey="venda_id";

    protected $fillable=[
        "venda_id",
        "item_pedido_id",
        "cliente_id"

    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\rh\Cliente','cliente_id','cliente_id');
    }

    public function items_pedido()
    {
        return $this->belongsTo('App\Models\core\ItemPedido','item_pedido_id','item_pedido_id');
    }

}
