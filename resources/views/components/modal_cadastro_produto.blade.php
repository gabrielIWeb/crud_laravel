<!-- Modal Cadastrar Produto -->
<div class="modal fade" id="cadastrar_produto" tabindex="-1" aria-labelledby="cadastrar_produto_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cadastrar_produto_label">Cadastrar Produto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form role="form" method="POST" action="{{ route('produto.cadastrar') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="nomeProduto">Nome</span>
                        <input type="text" class="form-control" placeholder="Nome do Produto" aria-label="Nome" aria-describedby="nomeProduto" name="nomeProduto" required>
                      </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Descrição</span>
                        <textarea class="form-control" aria-label="Descrição" name="descricaoProduto" required></textarea>
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="precoProduto">Preço</span>
                        <input type="number" class="form-control" placeholder="0.00" step="0.01" min="0" max="99999999.99" aria-label="Preco" aria-describedby="precoProduto" name="precoProduto" required>
                      </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="categoriaProduto">Categoria</label>
                        <select class="form-select" id="categoriaProduto" name="categoriaProduto" required>
                            @isset($categorias)
                            @foreach ($categorias as $indice => $categoria)
                                @if ($loop->first)
                                    <option disabled selected>Escolha uma opção...</option>
                                @endif
                                <option value="{{ $categoria['id'] }}">{{ $categoria['titulo_categoria'] }}</option>
                            @endforeach
                            @endisset
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="imagemProduto">Imagem</label>
                        <input type="file" class="form-control" id="imagemProduto" name="imagemProduto" accept="image/*">
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
