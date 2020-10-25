<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
        <a class="navbar-brand" href="{{ route('home') }}">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
        @if (Auth::check())
            <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">个人中心</a>
                <a class="dropdown-item" href="{{ route('users.edit', Auth::user()) }}">编辑资料</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" id="logout" href="#">
                <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <!--RESTful 架构中会使用 DELETE 请求来删除一个资源，当用户退出时，实际上相当于删除了用户登录会话的资源，因此这里的退出操作需要使用 DELETE 请求来发送给服务器-->
                    {{ method_field('DELETE') }}
                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                </form>
                </a>
            </div>
            </li>
        @else
            <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
            <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登录</a></li>
        @endif
        </ul>
    </div>
</nav>
