<div class="modal" tabindex="-1" id="modal_menssagem">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ $menssagem['titulo'] }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" role="alert">
            <p>{{ $menssagem['msg'] }}</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <a href="{{ route('categoria.listar') }}" type="button" class="btn btn-primary">Entendi!</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function()
    {
    $("#modal_menssagem").modal("show");
    });
</script>
