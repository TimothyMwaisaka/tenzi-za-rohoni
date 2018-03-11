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
