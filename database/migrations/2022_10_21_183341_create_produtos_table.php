<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            //Colunas
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nome_produto', 50);
            $table->string('descricao_produto', 100);
            $table->decimal('preco_produto', $precision = 8, $scale = 2);
            $table->bigInteger('id_categoria')->unsigned();
            $table->string('imagem_produto', 100)->default('no-img.jpg');
            $table->timestamps();
            $table->softDeletes();

            //Constraint
            $table->foreign('id_categoria')->references('id')->on('categorias');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('produtos', function(Blueprint $table) {
            $table->dropForeign('produtos_id_categoria_foreign');
            $table->dropColumn('id_categoria');
        });

        Schema::dropIfExists('produtos');
    }
}
