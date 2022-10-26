<?php

use Illuminate\Database\Seeder;
use App\Model\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categoria::class, 80)->create();
        /*
        $categoria = new Categoria();
        $categoria->titulo_categoria = 'Hardware';
        $categoria->descricao_categoria = 'Dispositivos eletronicos diversos.';
        $categoria->save();


        //O método create necessita do parametro fillable definido no Model.
        Categoria::create([
            'titulo_categoria' => 'Software',
            'descricao_categoria' => 'São programas que rodam em dispositivos eletronicos.'
        ]);
        */
    }
}
