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
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                @if(Auth::check())
                        <!-- Tasks Menu -->
                        <li class="dropdown tasks-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#adminModal" data-toggle="modal" data-target="#adminModal">
                                <i class="fa fa-gear"></i>
                            </a>
                        </li>
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{URL::asset('flexcodes/dist/img/profile.png')}}" class="user-image"
                                     alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ Auth::User()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{URL::asset('flexcodes/dist/img/profile.png')}}" class="img-circle"
                                         alt="User Image">
                                    <p>
                                        {{ Auth::User()->name }}
                                        <small>Registered: {{ Auth::User()->created_at->format('d/m/Y') }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @endif
                </ul>
            </div>
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
