<!-- Sidebar -->
<nav class="sidebar fixed-left" id="sidebar">
    <h4 class="sidebar_title">Categorias</h4>
    <div class="sidebar_list">

        @forelse ($categorias as $indice => $categoria)
        <div class="sidebar_list__item btn btn-primary" id="buttonCategoria">
            <div class="d-none" id="idCategoria">{{ $categoria['id_categoria'] }}</div>
            <span class="list_item__name">{{ $categoria['titulo_categoria'] }}</span>
            <div class="list_item__actions">
                <a href="{{ route('categoria.editar', ['id' => $categoria['id_categoria']]) }}" class="list_item__action__link btn btn-warning"><i class="bi bi-pencil"></i></a>
                <a href="{{ route('categoria.deletar', ['id' => $categoria['id_categoria']]) }}" class="list_item__action__link btn btn-danger"><i class="bi bi-trash3"></i></a>
            </div>
        </div>
        @empty
        <div class="alert alert-danger" role="alert">
            Não existem categorias cadastradas!
        </div>
        @endforelse

    </div>
</nav>

<script>
    const categoria = document.querySelectorAll('#buttonCategoria');
    const idCategoria = document.querySelectorAll('#idCategoria');

    for(let i = 0; i <= categoria.length; i++) {
        let idCategoriaUnico = idCategoria[i].innerHTML;
        categoria[i].addEventListener('click', () => {
            window.location.href = "/produto/"+idCategoriaUnico;
        });
    }
</script>
  <!-- Sidebar -->
