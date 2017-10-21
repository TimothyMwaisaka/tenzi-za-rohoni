<!DOCTYPE html>
{{-- Author: Timothy Mwaisaka --}}
{{-- Email: timothymwaisaka@gmail.com --}}
{{-- Date: 21/10/2017 --}}
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('flexcodes/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('flexcodes/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('flexcodes/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
          href="{{ asset('flexcodes/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('flexcodes/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('flexcodes/dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        td a {
            display: block;
        }
    </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

@include('includes.header')

<!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Tenzi za Rohoni
                    <small>Nyimbo za Tenzi</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Hymn - {{ $hymns->number }}</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="col-md-8 col-md-offset-2">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h2 style="margin: 0 20px" class="box-title">#{{ $hymns->number }}</h2>
                            <h3 class="box-title">{{ $hymns->title }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div style="margin: 0 20px" class="box-body">
                            {!! $hymns->song !!}
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    @include('includes.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('flexcodes/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('flexcodes/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('flexcodes/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('flexcodes/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('flexcodes/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('flexcodes/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('flexcodes/dist/js/demo.js') }}"></script>
</body>
</html>
