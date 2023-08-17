<?php

namespace App\Models\core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="pedidos";
    protected $primaryKey="pedido_id";

    protected $fillable=[
        "pedido_id",
        "data",
        "hora",
        "estado",

        "cliente_id"
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\rh\Cliente','cliente_id','cliente_id');
    }

    public function produtos()
    {
        return $this->belongsToMany(Pedido::class,'item_pedidos');
    }
}
