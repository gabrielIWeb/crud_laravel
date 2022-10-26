<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Categoria;
use \App\Model\Produto;

class Categorias extends Controller
{
    public function listar() {
        $categorias = Categoria::all();
        $categorias = $categorias->toArray();

        return view('categorias.categorias', ['categorias' => $categorias]);
    }

    public function cadastrar(Request $request) {
        $dados = $request->all();

        $image =  $this->saveImages($request, 'category', 'imagemCategoria');


        Categoria::create([
            'titulo_categoria' => $dados['tituloCategoria'],
            'descricao_categoria' => $dados['descricaoCategoria'],
            'imagem_categoria' => $image
        ]);

        return redirect()->route('categoria.listar');
    }

    public function buscar($idCategoria) {
        $categorias = Categoria::all();
        $categorias = $categorias->toArray();

        $retornoCategoria = Categoria::find($idCategoria);

        return view('categorias.categorias', ['categorias' => $categorias, 'categoriaEdit' => $retornoCategoria]);
    }

    public function editar(Request $request) {
        $categoria = $request->all();

        $instanciaCategoria =  Categoria::where('id', $categoria['idCategoria']);
        $instanciaCategoria->update(['titulo_categoria' => $categoria['tituloCategoria'], 'descricao_categoria' => $categoria['descricaoCategoria']]);
        if(isset($categoria['imagemCategoria'])) {
            $image =  $this->saveImages($request, 'category', 'imagemCategoria');
            $instanciaCategoria->update(['imagem_categoria' => $image]);
        }

        return redirect()->route('categoria.listar');
    }

    public function deletar($idCategoria) {
        $produtos = Produto::all()->where('id_categoria','=', $idCategoria);
        if ($produtos->count() !== 0){
            $categorias = Categoria::all();
            $categorias = $categorias->toArray();

            $menssagem = ['titulo' => 'Não foi possivel excluir categoria!', 'msg' => 'A categoria possui produtos cadastrados, remova antes de excluir!'];

            return view('categorias.categorias', ['categorias' => $categorias, 'menssagem' => $menssagem]);
        } else {
            $retornoCategoria = Categoria::find($idCategoria)->delete();
            return redirect()->route('categoria.listar');
        }
    }
}
