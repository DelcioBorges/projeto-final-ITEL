@extends("layouts.merge.grupos")


@section("conteudo")
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
                  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               
              <table id="tabela_dados" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nome do Grupo</th>
                  <th>Data de criação</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach ($grupo_coleta as $grupo_coleta )
                    <tr>
                  <td>{{$grupo_coleta->nome_grupo}}</td>
                  <td>{{$grupo_coleta->created_at}}</td>
                  </tr>    
                @endforeach
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  </div>
  <!-- /.content-wrapper -->
@endsection

