<?php

use Illuminate\Database\Seeder;
use App\Model\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Produto::class, 100)->create();
    }
}
