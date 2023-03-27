       

<!-- Janela modal -->
<div class="modal fade" id="myModal2{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="myModalLabel">Atualize os dados </h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('Admin.users.update',$users->id)}}" method="post" enctype="multipart/form-data">
        @csrf
          @include('Admin.forms._formUser.index')         
       <br> <button type="submit" class="btn btn-primary mb-3" style="margin:10px;">Atualizar</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

  <!-- sweetalert -->
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    @if (session('status'))
        <script>
            Swal.fire(
                'Dados Actualizados com sucesso',
                '',
                'success'
            )
            
        </script>
    @endif
  
