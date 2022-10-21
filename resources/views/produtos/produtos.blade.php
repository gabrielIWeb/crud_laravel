@extends('layout.app', ['categorias' => $categorias])

@section('title', 'Produtos')

@section('content')

    @component('components.sidebar_html', ['categorias' => $categorias])

    @endcomponent

    <section class="products">
        <h4 class="products_title">Produtos</h4>

        @forelse ($produtos as $indice => $produto)

        <div class="product_item">
            <img src="{{ asset('images/products/no-img.jpg') }}" alt="" class="product_item__img">
            <div class="product_item__info">
                <div class="product_item__info_col1">
                    <p class="item_info__name">{{ $produto['nome_produto'] }}</p>
                    <span class="item_info__tag bg-secondary text-white">Eletronicos</span>
                </div>
                <div class="product_item__info_col2">
                    <p class="item_info__preco text-success">R$ {{ $produto['preco_produto'] }}</p>
                </div>
            </div>
            <div class="product_item__actions">
                <a href="{{ route('produto.editar', ['id' => $produto['id_produto']]) }}" class="product_item__action__link btn btn-warning"><i class="bi bi-pencil"></i></a>
                <a href="{{ route('produto.deletar', ['id' => $produto['id_produto']]) }}" class="product_item__action__link btn btn-danger"><i class="bi bi-trash3"></i></a>
            </div>
        </div>

        @empty
            <div class="alert alert-danger" role="alert">
                Não existem produtos cadastrados!
            </div>
        @endforelse

    </section>


@endsection
