{{-- Author: Timothy Mwaisaka --}}
{{-- Email: timothymwaisaka@gmail.com --}}
{{-- Date: 21/10/2017 --}}

<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="{{ url('/') }}" class="navbar-brand"
                   style="margin-left: auto; font-size: 160%"><b>TENZI</b></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('https://www.bible.com/sw/') }}">Biblia</a></li>
                    @if (Auth::guest())
                    @else
                        <li>
                            <!-- Trigger the modal with a link -->
                            <a href="#adminModal" data-toggle="modal" data-target="#adminModal">Admin</a>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>

<!-- Modal -->
<div id="adminModal" class="modal fade adminModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ADMIN CONTROL AREA</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-responsive no-padding">
                    <tr>
                        <td><a href="{{ url('add-songs') }}">ADD NEW SONG</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">MANAGE USERS</a></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
