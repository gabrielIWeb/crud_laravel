<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Categoria;
use \App\Model\Produto;

class Produtos extends Controller
{
    public function listar() {
        $categorias = $this->getCategoriasArray();
        $produtos = $this->getProdutosArray();

        return view('produtos.produtos', ['categorias' => $categorias, 'produtos' => $produtos]);
    }

    public function listarByCategoria(int $idCategoria) {
        $categorias = $this->getCategoriasArray();
        $produtos = $this->getProdutosArray($idCategoria);

        return view('produtos.produtos', ['categorias' => $categorias, 'produtos' => $produtos]);
    }

    public function cadastrar(Request $request) {
        $dados = $request->all();
        $image =  $this->saveImages($request, 'products', 'imagemProduto');

        Produto::create([
            'nome_produto' => $dados['nomeProduto'],
            'descricao_produto' => $dados['descricaoProduto'],
            'preco_produto' => $dados['precoProduto'],
            'id_categoria' => $dados['categoriaProduto'],
            'imagem_produto' => $image
        ]);


        return redirect()->route('produto.listar');

    }

    public function buscar(int $idProduto) {
        $categorias = $this->getCategoriasArray();
        $produtos = $this->getProdutosArray();

        $retornoProduto = Produto::find($idProduto);

        return view('produtos.produtos', ['categorias' => $categorias, 'produtos' => $produtos, 'produtoEdit' => $retornoProduto]);

    }

    public function editar(Request $request) {
        $produto = $request->all();

        $instanciaProduto =  Produto::where('id', $produto['idProduto'])->update(['nome_produto' => $produto['nomeProduto'], 'descricao_produto' => $produto['descricaoProduto'], 'preco_produto' => $produto['precoProduto']]);

        if(isset($produto['categoriaProduto'])) {
            $instanciaProduto->update(['categoria_produto' => $produto['categoriaProduto']]);
        }

        if(isset($produto['imagemProduto'])) {
            $image =  $this->saveImages($request, 'products', 'imagemProduto');
            $instanciaProduto->update(['imagem_produto' => $image]);
        }

        return redirect()->route('produto.listar');
    }

    public function deletar(int $idProduto) {
        $retornoProduto = Produto::find($idProduto)->delete();

        return redirect()->route('produto.listar');
    }

    public function getCategoriasArray() {
        $categorias = Categoria::all();
        return $categorias->toArray();
    }

    public function getProdutosArray(int $idCategoria = null) {
        if($idCategoria === null) {
            $produtos = Produto::all();
        } else {
            $produtos = Produto::all()->where('id_categoria', $idCategoria);
        }

        foreach ($produtos as $key => $produto) {
            $produtoModel = Produto::find($produto['id']);

            $produto['titulo_categoria'] = $produtoModel->categoria->titulo_categoria;
        }
        return $produtos->toArray();
    }

}
