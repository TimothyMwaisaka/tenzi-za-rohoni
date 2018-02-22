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
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                @include('includes.flexbanner')

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="flexcodes-datatable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="col-md-1 text-center">NO</th>
                                <th>HYMN</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hymns as $hymn)
                                <tr>
                                    <td class="text-center"><a
                                                href="view-songs/{{ $hymn->id }}">{{ $hymn->number }}</a></td>
                                    <td><a href="view-songs/{{ $hymn->id }}">{{ $hymn->title }}</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
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
<!-- AdminLTE App -->
<script src="{{ asset('flexcodes/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('flexcodes/dist/js/demo.js') }}"></script>
<script>
    $(function () {
        $('#flexcodes-datatable').DataTable()
        $('#example2').DataTable({
            'pageLength': 30,
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
</body>
</html>
