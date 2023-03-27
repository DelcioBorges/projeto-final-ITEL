<form method="POST" action="{{route('Admin.grupos.update',$grupo_coleta->id)}}">
@csrf
@include('Admin.forms._formGrupoColeta.update')
<input type="submit" value="Editar">
</form>