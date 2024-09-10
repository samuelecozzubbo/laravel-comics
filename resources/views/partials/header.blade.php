<header>
    <div class="container">
        <a href="/" class="brand">
            <img src="/img/dc-logo.png" alt="logo">
        </a>

        <!-- Navigazione -->
        <nav>
            <ul>
                @foreach ($main_menu as $item)
                    <li>
                        <a href="{{ route($item['title']) }}"
                            class="{{ Route::currentRouteName() === $item['title'] ? 'active' : '' }}">{{ $item['text'] }}</a>
                    </li>
                @endforeach
                <li><a href="#" class="">CHARACTER</a></li>
                <li><a href="#" class="">MOVIES</a></li>
                <li><a href="#" class="">TV</a></li>
                <li><a href="#" class="">GAMES</a></li>
                <li><a href="#" class="">COLLECTIBLES</a></li>
                <li><a href="#" class="">VIDEOS</a></li>
                <li><a href="#" class="">CONTACTS</a></li>
                <li><a href="#" class="">SHOP</a></li>

            </ul>
        </nav>
    </div>

</header>
