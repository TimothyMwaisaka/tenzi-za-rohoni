@extends('layouts.master')

@section('content')
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
                        <div class="form-group col-md-2 {{ $errors->has('number') ? ' has-error' : '' }}">
                            <label></label>
                            <input type="text" name="number" class="form-control"
                                   placeholder="Song Number ...">
                            @if ($errors->has('number'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label></label>
                            <input type="text" name="title" class="form-control"
                                   placeholder="Song Tittle ...">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-body pad">
                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                <textarea name="song" class="textarea" rows="20"
                          placeholder="Song..."
                          style="width: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                </textarea>
                        @if ($errors->has('song'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('song') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-block btn-primary btn-flat">

        </form>
    </section>
    <!-- /.content -->
@stop