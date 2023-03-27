       

<!-- Janela modal -->
<div class="modal fade" id="myModal{{$contentores->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="myModalLabel">Editar contentor </h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('Admin.contentores.update',$contentores->id)}}" method="post">
        @csrf
          @include('Admin.forms._formContentor.index')         
       <br> <button type="submit" class="btn btn-primary mb-3" style="margin:10px;">Adicionar</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>
