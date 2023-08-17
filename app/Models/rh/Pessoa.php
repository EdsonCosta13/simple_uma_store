<?php

namespace App\Models\rh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="pessoas";
    protected $primaryKey="pessoa_id";

    protected $fillable=[
        "primeiro_nome",
        "sobrenome",
        "telefone",
        "genero_id",
    ];

    public function cliente()
    {
        return $this->hasOne('App\Models\rh\Cliente','cliente_id','cliente_id');
    }

    public function genero()
    {
        return $this->belongsTo('App\Models\grl\Genero','genero_id','genero_id');
    }
}
