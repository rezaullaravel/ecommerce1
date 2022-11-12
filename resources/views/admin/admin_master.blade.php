<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('/')}}backend/images/favicon.ico">

    <title>Ecommerce Project</title>


	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('/')}}backend/css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('/')}}backend/css/skin_color.css">

	<!-- Toastr Notification -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>




  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
  //sweet alert package
  @include('sweetalert::alert')


<div class="wrapper">

  @include('admin.includes.admin_header')

  <!-- Left side column. contains the logo and sidebar -->
 @include('admin.includes.admin_sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  @include('admin.includes.admin_footer')

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


	<!-- Vendor JS -->
	<script src="{{asset('/')}}backend/js/vendors.min.js"></script>
    <script src="{{asset('/')}}backend/assets/icons/feather-icons/feather.min.js"></script>
	<script src="{{asset('/')}}backend/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script>
	<script src="{{asset('/')}}backend/assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="{{asset('/')}}backend/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

	<!-- Sunny Admin App -->
	<script src="{{asset('/')}}backend/js/template.js"></script>
	<script src="{{asset('/')}}backend/js/pages/dashboard.js"></script>

    <!-- data table -->
    <script src="{{ asset('/') }}backend/assets/vendor_components/datatable/datatables.min.js"></script>
	<script src="{{ asset('/') }}backend/js/pages/data-table.js"></script>

   //bootstrap cdn




	<!-- Toastr Notification -->
	<script>
  @if(Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.warning("{{ session('warning') }}");
  @endif
</script>

</body>
</html>
