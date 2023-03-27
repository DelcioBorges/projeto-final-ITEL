@extends("layouts.merge.enderecos")


@section("conteudo")
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
                  <div class="box">
            <div class="box-header">
              <h3 class="box-title">ENDEREÇOS</h3>
              <br>
              <button  type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal" style="margin:15px;">
              Adicionar Endereço
              </button>
         
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('Admin.Endereco.create.index')
                <table id="example1" class="table table-bordered table-striped">
                 <thead>
                <tr>
                 <th>ID</th>
                  <th>ENDEREÇO</th>
                  <th>DATA DE CRIAÇÃO</th>
                  <th>Acções</th>
                 
                  
                </tr>
                </thead>
                <tbody>
                             
                @if(isset($endereco))
                  @foreach ($endereco as $enderecos )
                    <tr>
                
                  <td>{{$enderecos->id}}</td>
                  <td>{{$enderecos->nome_endereco}}</td>
                  <td>{{$enderecos->created_at}}</td>
                  <td>

                    
              
        
                  <button  type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal{{$enderecos->id}}" style="margin:15px;">
             Editar
              </button>
              @include('Admin.Endereco.edit.index')
              <a href="{{route('Admin.enderecos.purge',$enderecos->id)}}" class="btn btn-danger" type="button">Eliminar</a>
                  </td>
                  
                  
                  </tr>       
                  @endforeach
                   @endif
                              

                  </tbody>      

                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>ENDEREÇO</th>
                  <th>DATA DE CRIAÇÃO</th>
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