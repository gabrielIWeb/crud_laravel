<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    protected $fillable = ['nome_produto', 'descricao_produto', 'preco_produto', 'id_categoria', 'imagem_produto'];
    protected $hidden = ['created_at', 'updated_at','deleted_at'];
    use SoftDeletes;

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
