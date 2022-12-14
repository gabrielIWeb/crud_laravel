<!-- Modal Editar Produto -->
<div class="modal fade" id="editar_categoria" tabindex="-1" aria-labelledby="cadastrar_categoria_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editar_categoria_label">Cadastrar Categoria</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form role="form" method="POST" action="{{ route('categoria.editar') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="idCategoria" value="{{ $categoriaEdit['id'] }}">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="tituloCategoria">Titulo</span>
                        <input type="text" class="form-control" placeholder="Titulo da Categoria" aria-label="Titulo" aria-describedby="tituloCategoria" name="tituloCategoria" value="{{ $categoriaEdit['titulo_categoria'] }}" required>
                      </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Descrição</span>
                        <textarea class="form-control" aria-label="Descrição" name="descricaoCategoria" required>{{ $categoriaEdit['descricao_categoria'] }}</textarea>
                      </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="imagemCategoria">Imagem</label>
                        <input type="file" class="form-control" id="imagemCategoria" name="imagemCategoria">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function()
    {
    $("#editar_categoria").modal("show");
    });
</script>
