<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>DietBite</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('assets/vendors/core/core.css')}}">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('assets/css/demo_2/style.css')}}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}"/>
<!-- plugin css for this page -->

<link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
<!-- end plugin css for this page -->


@yield('styles')
  
</head>
<!-- BEGIN: Body-->

<div class="main-wrapper">
	<!-- Navigation -->
	@include('admin.partials.sidebar')
    <div class="page-wrapper">

		@include('admin.partials.navbar')
	
    <div class="page-content">

		@yield('content')

	</div>
	  <!-- partial:partials/_footer.html -->
	  <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
        <p class="text-muted text-center text-md-left">Copyright © 2020 <a href="#" target="_blank">DietBite Restaruant</a>. All rights reserved</p>
        <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
    </footer>
    <!-- partial -->
</div>
</div>



@yield('scripts')
    <!-- core:js -->
	<script src="{{asset('assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  {{-- <script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script> --}}
  <script src="{{asset('assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
  <script src="{{asset('assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
  {{-- <script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script> --}}
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('assets/js/template.js')}}"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  {{-- <script src="{{asset('assets/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/js/datepicker.js')}}"></script> --}}
	<!-- end custom js for this page -->
  <!-- plugin js for this page -->
  <script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
	<!-- end plugin js for this page -->
	
  <!-- custom js for this page -->
  <script src="{{asset('assets/js/data-table.js')}}"></script>
	<!-- end custom js for this page -->

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

</body>
</html>