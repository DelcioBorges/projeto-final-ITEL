       

<!-- Janela modal -->
<div class="modal fade" id="myModal{{$enderecos->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="myModalLabel">Edite o endereço </h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('Admin.enderecos.update', $enderecos->id)}}" method="post">
        @csrf
          @include('Admin.forms._formEndereco.index')         
        <button type="submit" class="btn btn-primary mb-3">Atualizar</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>
