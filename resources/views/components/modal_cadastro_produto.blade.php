<!-- Modal Cadastrar Produto -->
<div class="modal fade" id="cadastrar_produto" tabindex="-1" aria-labelledby="cadastrar_produto_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cadastrar_produto_label">Cadastrar Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form role="form" method="POST" action="{{ route('produto.cadastrar') }}">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="nomeProduto">Nome</span>
                        <input type="text" class="form-control" placeholder="Nome do Produto" aria-label="Nome" aria-describedby="nomeProduto" name="nomeProduto">
                      </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Descrição</span>
                        <textarea class="form-control" aria-label="Descrição" name="descriçãoProduto"></textarea>
                      </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="categoriaProduto">Categoria</label>
                        <select class="form-select" id="categoriaProduto" name="categoriaProduto">
                            <option selected>Escolha uma opção...</option>
                            @isset($categorias)
                                @for($i = 0; $i < count($categorias); $i++)
                                <option value="{{ $categorias[$i]['id_categoria'] }}">{{ $categorias[$i]['titulo_categoria'] }}</option>
                                @endfor
                            @endisset
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="imagemProduto">Imagem</label>
                        <input type="file" class="form-control" id="imagemProduto" name="imagemProduto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</a>
                </div>
            </form>
        </div>
    </div>
</div>
