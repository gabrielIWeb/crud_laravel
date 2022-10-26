<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    //o fillable é usado para definir as colunas permitidas de serem usadas no método create() da classe Model.
    protected $fillable = ['titulo_categoria', 'descricao_categoria', 'imagem_categoria'];
    protected $hidden = ['created_at', 'updated_at','deleted_at'];

    //Não deixa excluir do banco de dados as informações.
    use SoftDeletes;
}
