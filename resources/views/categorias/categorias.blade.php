@extends('layout.app', ['categorias' => $categorias])

@section('title', 'Categorias')

@section('content')
<div class="categorias">
    <h1 class="categorias_titulo">Categorias</h1>

    <section class="categorias_lista overflow-auto">
        @forelse ($categorias as $index => $categoria)

        <div>
            <div class="category_item">
                <div class="category_item__image">
                    <img src="{{ asset('storage/images/'.$categoria['imagem_categoria']) }}" alt="Imagem da Categoria" width="100px">
                </div>
                <div class="category_item__info">
                        <p class="item_info__name">{{ $categoria['titulo_categoria'] }}</p>
                        <p class="item_info__descricao">{{ $categoria['descricao_categoria'] }}</p>
                    </div>
                    <div class="category_item__actions">
                        <a href="{{ route('categoria.buscar', ['id' => $categoria['id']]) }}" class="category_item__action__link btn btn-warning"><i class="bi bi-pencil"></i></a>
                    <a href="{{ route('categoria.deletar', ['id' => $categoria['id']]) }}" class="category_item__action__link btn btn-danger"><i class="bi bi-trash3"></i></a>
                </div>
            </div>
        </div>

        @empty
        <div class="alert alert-danger" role="alert">
            Não existem categorias cadastradas!
        </div>
        @endforelse
    </section>
</div>
@endsection
