<?php

namespace App\Models\core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="produtos";
    protected $primaryKey="produto_id";

    protected $fillable=[
        "produto_id",
        "nome",  
        "preco",
        "quantidade",

        "imagem_id",
        "categoria_id",
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Models\core\Categoria','categoria_id','categoria_id');
    }

    public function imagem()
    {
        return $this->belongsTo('App\Models\core\Imagem','imagem_id','imagem_id');
    }

    public function pedido()
    {
        return $this->belongsToMany(Pedido::class,'item_pedidos');
    }

}
