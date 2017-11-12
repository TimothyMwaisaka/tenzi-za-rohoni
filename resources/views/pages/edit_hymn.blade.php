<!DOCTYPE html>
{{-- Author: Timothy Mwaisaka --}}
{{-- Email: timothymwaisaka@gmail.com --}}
{{-- Date: 24/10/2017 --}}
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
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('flexcodes/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                    <li class="active">Add hymn</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i> {{ session()->get('success') }}
                    </div>
                @endif
                @include ('includes.flexbanner')
                <form role="form" method="post" action="">
                    {{ csrf_field() }}
                    <div class="box">
                        <div class="box-body">
                                <div class="col-md-12">
                                    <!-- text input -->
                                    <div class="form-group col-md-2">
                                        <label></label>
                                        <input type="text" name="number" class="form-control"
                                               value="{{ $hymns->number }}">
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label></label>
                                        <input type="text" name="title" class="form-control" value="{{ $hymns->title }}">
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-body pad">

                <textarea name="song" class="textarea"
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! $hymns->song !!}</textarea>

                        </div>
                    </div>
                    <input type="submit" name="submit" value="Save" class="btn btn-block btn-primary btn-flat">

                </form>
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
<!-- SlimScroll -->
<script src="{{ asset('flexcodes/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('flexcodes/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('flexcodes/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('flexcodes/dist/js/demo.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('flexcodes/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
    $(function () {
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
</body>
</html>
