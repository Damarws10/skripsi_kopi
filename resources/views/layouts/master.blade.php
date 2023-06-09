<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('vendor/plugins/fontawesome-free/css/all.min.css') }}">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="{{ asset('vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('vendor/dist/css/adminlte.min.css') }}">

		<title>Document</title>
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">

		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- navbar -->
			@include('partials.navbarTop')
			<!-- endnavbar -->

			<!-- Main Sidebar Container -->
			@include('partials.navbarSide')
			<!-- endsidebar -->

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				@yield('content')
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<!-- footer -->
			@include('partials.footer')
			<!-- endfooter -->

			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
		</div>
		<!-- endcloe wrapper -->
	

		<!-- jQuery -->
		<script src="{{ asset('vendor/plugins/jquery/jquery.min.js') }}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- overlayScrollbars -->
		<script src="{{ asset('vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('vendor/dist/js/adminlte.min.js') }}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{ asset('vendor/dist/js/demo.js') }}"></script>
	</body>
</html>