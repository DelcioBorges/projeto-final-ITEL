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

<script>
var balanco=@json($balanco);
</script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('js/sample-chart.js')}}"></script>
</body>

