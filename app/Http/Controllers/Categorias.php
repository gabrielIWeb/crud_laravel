<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categorias extends Controller
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

        return view('categorias.categorias', ['categorias' => $categorias]);
    }

    public function cadastrar(Request $request) {
        $dados = $request->all();

        dd($dados['tituloCategoria']);
        return view('categorias.categorias');
    }

    public function editar($idCategoria) {
        //return view('categorias.categorias');

        return redirect()->route('categoria.listar');
    }

    public function deletar($idCategoria) {
        //return view('categorias.categorias');

        return redirect()->route('categoria.listar');
    }
}
