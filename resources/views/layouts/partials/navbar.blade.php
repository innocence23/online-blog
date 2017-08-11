{{--<nav class="navbar navbar-inverse filter-bar navbar-fixed-top">--}}
{{--<nav class="navbar navbar-inverse filter-bar navbar-color-on-scroll" id="sectionsNav">--}}
<style type="text/css">
    .navbar.navbar-inverse .dropdown-menu li>a:focus, .navbar.navbar-inverse .dropdown-menu li>a:hover {
        background-color: #212121 !important;
    }
</style>

<nav class="navbar navbar-inverse" style="z-index: 9999; padding:2px 0">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">自(字)得其乐</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                @foreach($menu as $v)
                    @if(isset($v['son']))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">{{ $v['icon'] }}</i> {{ $v['name'] }}
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                @foreach($v['son'] as $vv)
                                    <li>
                                        <a href="{{ $vv['url'] }}">
                                            <i class="material-icons">{{ $vv['icon'] }}</i> {{ $vv['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ $v['url'] }}">
                                <i class="material-icons">{{ $v['icon'] }}</i> {{ $v['name'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}"><i class="material-icons">fingerprint</i> 登陆</a></li>
                    <li><a href="{{ route('signup') }}"><i class="material-icons">person_add</i> 注册</a></li>
                @else
                    <li class="dropdown">
                        <a href="#pablo" class="profile-photo dropdown-toggle" data-toggle="dropdown">
                            <div class="profile-photo-small">
                                <img src="/assets/img/faces/avatar.jpg" alt="{{ Auth::user()->name }}" class="img-circle img-responsive">
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('profile') }}"><i class="material-icons">account_circle</i> 个人中心</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                   href="{{ route('logout') }}"><i class="material-icons">forward</i> 登出</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>