@extends("layouts.merge.users")


@section("conteudo")
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
               <div class="box">
            <div class="box-header">
              <h3 class="box-title text-center">Utilizadores</h3><br>
              <button  type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal" style="margin:15px;">Adicionar usuário</button>
              @include('Admin.User.create.index')

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                 <thead>
                <tr>
                  <th>ID</th>
                  <th>Primeiro Nome</th>
                  <th>Último Nome</th>
                  <th>Email</th>
                  <th>Foto</th>
                  <th>Perfil de acesso</th>
                  <th>Data de criação</th>
                  <th>Acções</th>
            
                  
                </tr>
                </thead>
                <tbody>
                @if (isset($user))
                    
                  @foreach ($user as $users )
                     <tr>
                        <td>{{$users->id}}</td>   
                        <td>{{$users->primeiro_nome}}</td>   
                        <td>{{$users->ultimo_nome}}</td>   
                        <td>{{$users->email}}</td>   
                        <td colspan="1">
                        @if($users->foto)
                        <img  class="text-center" src="{{asset('img/users/'. $users->foto)}}" alt="{{ $users->primeiro_nome }}" width="80">
                        @endif                
                        </td>   
                        <td>{{$users->perfil_acesso}}</td>   
                        <td>{{$users->created_at}}</td>   
                        
                         <td>
                                 <button  type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal2{{$users->id}}" style="margin:15px;">
                                Editar
                                </button>
                                @include('Admin.User.edit.index')

                                <a href="{{route('Admin.users.purge',$users->id)}}" class="btn btn-danger" type="button">Eliminar</a>
                        </td>
                     </tr>     
                  @endforeach
                
                @endif
                  </tbody>      

                <tfoot>
                <tr>
                 <th>ID</th>
                  <th>Primeiro Nome</th>
                  <th>Último Nome</th>
                  <th>Email</th>
                  <th>Foto</th>
                  <th>Perfil de acesso</th>
                  <th>Data de criação</th>
                  <th>Acções</th>
            </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            </div>
           
  </div>
  
  <!-- /.content-wrapper -->
@endsection