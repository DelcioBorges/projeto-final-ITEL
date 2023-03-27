@include("layouts._includes.admin.Header")

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


     <!-- Menu Content -->
        @include("layouts._includes.admin.Menu")
       <!-- end Menu Content -->


    <!-- Main Content -->
        @yield("conteudo")
    <!-- end Main Content -->

    <!-- Footer Content -->
        @include("layouts._includes.admin.Footer")
       <!-- end Footer Content -->


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->








<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tabela_dados').DataTable({
        searching: true,
        dom: 'lfrtip',
        language: {
          search: "Pesquisar:"
        },
        
      });
      var tabela_dados = $('#tabela_dados').DataTable();
      $('#input_pesquisar').on( 'keyup', function () {
        tabela_dados.search( this.value ).draw();
      });
    });
  </script>

</body>