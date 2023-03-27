       

<!-- Janela modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="myModalLabel">Adicione um Usuário </h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('Admin.users.store')}}" method="post" enctype="multipart/form-data">
        @csrf
          @include('Admin.forms._formUser.index')         
       <br> <button type="submit" class="btn btn-primary mb-3" style="margin:10px;">Adicionar</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

  <!-- sweetalert -->
    <script src="/js/sweetalert2.all.min.js"></script>

    @if (session('status'))
        <script>
            Swal.fire(
                'Usuário cadastrado com sucesso',
                '',
                'success'
            )

        </script>
    @endif
    @if (session('aviso'))
        <script>
            Swal.fire(
                'Falha ao cadastrar Usuário!',
                '',
                'error'
            )

        </script>
    @endif
    @if (session('status2'))
        <script>
            Swal.fire(
                'Usuário eliminado!',
                '',
                'success'
            )

        </script>
    @endif
    @if (session('aviso2'))
        <script>
            Swal.fire(
                'Falha ao eliminar usuário!',
                '',
                'error'
            )

        </script>
    @endif

