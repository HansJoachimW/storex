<nav class="navbar navbar-expand-lg navbar-light font_sen_700 customgradient">
    <div class="container-fluid">
        <div class="" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/" style="font-size: 17px">StoreX</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ \Request::route()->getName() == 'index' ? 'active' : '' }}"
                        aria-current="page" href="/" id="link_home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ \Request::route()->getName() == 'about' ? 'active' : '' }}"
                        aria-current="page" href="/about" id="link_about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ \Request::route()->getName() == 'product' ? 'active' : '' }}"
                        aria-current="page" href="/product" id="link_product">Products</a>
                </li>
                <li class="nav-item">
                    @auth
                        @if (auth()->user()->status == 'admin')
                            <a class="nav-link {{ \Request::route()->getName() == 'admin' ? 'active' : '' }}"
                                href="/admin">Admin</a>
                        @endif

                    @endauth
                </li>
                <li class="nav-item">
                    @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="btn">Logout</button>
                        </form>
                    @endauth

                    @guest
                        <a class="nav-link {{ \Request::route()->getName() == 'login' ? 'active' : '' }}"
                            aria-current="page" href="/login" id="link_login">Login</a>
                        <a class="nav-link {{ \Request::route()->getName() == 'register' ? 'active' : '' }}"
                            aria-current="page" href="/register" id="link_register">Register</a>
                    @endguest
                </li>
        </div>
    </div>
</nav>
