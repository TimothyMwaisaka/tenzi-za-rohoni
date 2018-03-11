@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="padding">
        <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i> {{ session()->get('success') }}
                </div>
            @endif
            <div class="box box-solid">
                <div class="box-header with-border">
                    <div class="pull-left">
                        <h3 class="box-title">DATABASE USERS</h3>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone no.</th>
                            <th>Registered</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <a style="display: inline;" href="">Edit</a> | <a class="delete"
                                                                                      style="display: inline;"
                                                                                      Onclick="return confirm('Are you sure you want to delete this user?')"
                                                                                      href="{{ route('users.delete', ['id' => $user->id] ) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
@stop