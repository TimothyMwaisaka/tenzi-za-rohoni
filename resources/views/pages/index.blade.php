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

            @if(session()->has('delete'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i> {{ session()->get('delete') }}
                </div>
            @endif

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