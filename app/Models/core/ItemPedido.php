<?php

namespace App\Models\core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemPedido extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="item_pedidos";
    protected $primaryKey="item_pedido_id";

    protected $fillable=[
        "item_pedido_id",
        "produto_id",
        "pedido_id",
        "total",
    ];

    public function venda()
    {
        return $this->hasOne('App\Models\core\Venda','venda_id','venda_id');
    }

}
