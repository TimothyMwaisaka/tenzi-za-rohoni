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
        <section class="padding">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                @if(session()->has('updated'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i> {{ session()->get('updated') }}
                    </div>
                @endif
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <div class="pull-left">
                            <h2 style="margin: 0 10px" class="box-title">#{{ $hymns->number }}</h2>
                            <h3 class="box-title">{{ $hymns->title }}</h3>
                        </div>
                        @if (Auth::check())
                            <div class="pull-right">
                                <a href="{{ url('edit-songs/'.$hymns->id) }}">Edit</a> |
                                <a href="{{ url('song/delete/'.$hymns->id) }}">Delete</a>
                            </div>
                        @endif
                    </div>
                    <!-- /.box-header -->
                    <div style="font-size: 120%; margin: 0 10px" class="box-body">
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

