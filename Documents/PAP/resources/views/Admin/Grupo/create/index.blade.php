<form method="POST" action="{{route('Admin.grupos.store')}}">
@csrf
@include('Admin.forms._formGrupoColeta.index')
<input type="submit" value="Adicionar">
</form>