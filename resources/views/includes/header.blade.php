{{-- Author: Timothy Mwaisaka --}}
{{-- Email: timothymwaisaka@gmail.com --}}
{{-- Date: 21/10/2017 --}}

<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="{{ url('/') }}" class="navbar-brand" style="margin-left: auto; font-size: 160%"><b>TENZI</b></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('https://www.bible.com/sw/') }}">BIBLIA</a></li>
                    @if (Auth::guest())
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                        @endif
                </ul>
                {{--<form class="navbar-form navbar-left" role="search">--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" id="navbar-search-input" placeholder="Search">--}}
                    {{--</div>--}}
                {{--</form>--}}
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>