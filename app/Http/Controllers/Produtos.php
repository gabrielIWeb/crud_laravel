<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produtos extends Controller
{
    public function listar() {

        $categorias = array(
            array(
                'id_categoria'=>0,
                'titulo_categoria'=>'Eletronicos',
                'descricao_categoria'=>'Teste000',
                'imagem_categoria'=>'sem-imagem.jpg'
            ),
            array(
                'id_categoria'=>1,
                'titulo_categoria'=>'Vestuario',
                'descricao_categoria'=>'Teste111',
                'imagem_categoria'=>'sem-imagem.jpg'
            ),
            array(
                'id_categoria'=>2,
                'titulo_categoria'=>'Casa e Video',
                'descricao_categoria'=>'Teste222',
                'imagem_categoria'=>'sem-imagem.jpg'
            ),
            array(
                'id_categoria'=>3,
                'titulo_categoria'=>'Veiculos',
                'descricao_categoria'=>'Teste333',
                'imagem_categoria'=>'sem-imagem.jpg'
            )
        );
        $produtos = array(
            array(
                'id_produto'=>0,
                'nome_produto'=>'Telefone',
                'descricao_produto'=>'Teste000',
                'preco_produto' => 55.70,
                'id_categoria_produto'=>2,
                'imagem_produto'=>'sem-imagem.jpg'
            ),
            array(
                'id_produto'=>1,
                'nome_produto'=>'Notebook',
                'descricao_produto'=>'Teste111',
                'preco_produto' => 47.19,
                'id_categoria_produto'=>1,
                'imagem_produto'=>'sem-imagem.jpg'
            ),
            array(
                'id_produto'=>2,
                'nome_produto'=>'Monitor',
                'descricao_produto'=>'Teste222',
                'preco_produto' => 120.89,
                'id_categoria_produto'=>2,
                'imagem_produto'=>'sem-imagem.jpg'
            )
        );

        return view('produtos.produtos', ['categorias' => $categorias, 'produtos' => $produtos]);
    }

    public function listarByCategoria(int $idCategoria) {
        return redirect()->route('produto.listar');
    }

    public function cadastrar(Request $request) {
        $dados = $request->all();
        dd($dados);
        return view('produtos.produtos');
    }

    public function editar(int $idProduto) {
        //return view('produtos.produtos');

        return redirect()->route('produto.listar');
    }

    public function deletar(int $idProduto) {
        //return view('produtos.produtos');

        return redirect()->route('produto.listar');
    }

}
