<header>
    <div class="container">
        <a href="/" class="brand">
            <img src="/img/dc-logo.png" alt="logo">
        </a>

        <!-- Navigazione -->
        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}"
                        class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
                </li>
                <li>
                    <a href="{{ route('comics') }}"
                        class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">COMICS</a>
                </li>
                <li><a href="#" class="">CHARACTER</a></li>
                <li><a href="#" class="">MOVIES</a></li>
                <li><a href="#" class="">TV</a></li>
                <li><a href="#" class="">GAMES</a></li>
                <li><a href="#" class="">COLLECTIBLES</a></li>
                <li><a href="#" class="">VIDEOS</a></li>
                <li><a href="#" class="">CONTACTS</a></li>
                <li><a href="#" class="">ABOUT US</a></li>
                <li><a href="#" class="">SHOP</a></li>

            </ul>
        </nav>
    </div>

</header>
