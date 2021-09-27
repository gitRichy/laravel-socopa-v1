<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Dashboard @yield('title')</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">

        <!-- Select2 CSS -->
		<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{ asset('/css/bootstrap-datetimepicker.min.css') }}">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		{{--[if lt IE 9]>
			<script src="{{ asset('js/html5shiv.min.js') }}"></script>
			<script src="{{ asset('js/respond.min.js') }}"></script>
		<![endif]--}}
    </head>
	
    <body>
        <!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Page Wrapper -->
            <div class="page-wrapper">

            <!-- Header -->
            <x-header />
            <!-- /Header -->

            <!-- Sidebar -->
            <x-sidebar />
            <!-- /Sidebar -->

            <!-- Page Content -->
            @yield('content')
            <!-- /Page Content -->

            </div>
            <!-- /Page Wrapper -->
            
        </div>
        <!-- /Main Wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
                
        <!-- Bootstrap Core JS -->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Slimscroll JS -->
        <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>

        <!-- Select2 JS -->
		<script src="{{ asset('js/select2.min.js') }}"></script>
		
		<!-- Datetimepicker JS -->
		<script src="{{ asset('js/moment.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>

        <!-- Datatable JS -->
		<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Chart JS -->
        <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('js/chart.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>