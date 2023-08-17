<?php

namespace App\Models\core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="imagems";
    protected $primaryKey="imagem_id";

    protected $fillable=[
        "imagem_id",
        "tipo",
        "path",
    ];

    public function produtos()
    {
        return $this->hasMany('App\Models\core\Produto','produto_id','produto_id');
    }
}
