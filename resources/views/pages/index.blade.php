@extends('layouts.master')

@section('content')
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
                            <td><a href="view-songs/{{ $hymn->id }}">{{ strtoupper($hymn->title) }}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>

    </section>
    <!-- /.content -->
@stop