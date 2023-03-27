@extends("layouts.merge.contentores")


@section("conteudo")
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
                  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contentores</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
         
              <button  type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal" style="margin:15px;">
              Adicionar Contentor
              </button>
              @include('Admin.Contentor.create.index')
            
              <table id="tabela_dados" class="table table-bordered table-striped " >
               
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Estado</th>
                  <th>Endereço</th>
                  <th>Data de criação</th>
                  <th>Acções</th>
            
                  
                </tr>
                </thead>
                <tbody>
                @if (isset ($contentor))
                 @foreach ($contentor as $contentores )
                    <tr>
                    
                 <td>{{$contentores->id}}</td>
                 <td>{{$contentores->estado}}</td>
                 <td>{{$contentores->nome_endereco}}</td>
                 <td>{{$contentores->created_at}}</td>
                  <td>
                  <button  type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal{{$contentores->id}}" style="margin:15px;">
              Editar
              </button>
                @include('Admin.Contentor.edit.index')
                  <a href="{{route('Admin.contentores.purge',$contentores->id)}}" type="button" class="btn btn-danger">Eliminar</a>
                  
                  </td>
                  </tr> 
                 @endforeach   
                    
                @endif
                     
                  </tbody>      
                              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  </div>
  
  <!-- /.content-wrapper -->
@endsection