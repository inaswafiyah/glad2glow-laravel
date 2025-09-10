<header class="navbar">
    <div class="logo">
        <h1>
            <span class="letter">G</span><span class="letter">L</span><span class="letter letter-a">A</span><span class="letter letter-d">D</span><span class="letter">2</span><span class="letter">G</span><span class="letter">L</span><span class="letter">O</span><span class="letter">W</span><span class="dot">.</span>
        </h1>
        <p>BEAUTY EXPERT</p>
    </div>
    <nav class="nav-links">
        <ul>
            <li><a href="{{ url('/') }}" class="active">HOME</a></li>
            <li><a href="{{ url('/products') }}">FEATURED PRODUCT</a></li>
            <li><a href="{{ url('/sale') }}">SALE</a></li>
            <li><a href="#glowcare">GLOWCARE</a></li>
            <li>
                <a href="{{ url('/cart') }}" class="cart-icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="cart-count">0</span>
                </a>
            </li>
            <li><a href="{{ route('login') }}" class="login-btn">LOGIN NOW</a></li>
            @if (Route::has('login'))
                @auth
                    <li>
                        <a href="{{ url('/dashboard') }}" class="dashboard-link">Dashboard</a>
                    </li>
                @endauth
            @endif
        </ul>
    </nav>
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
