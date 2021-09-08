<header>
    <div class="header-bar">

    </div>
    <div class="container-center">
        <div class="container-logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="dc comics">
        </div>
        <nav>
            <ul>
                <li><a class="{{ ('http://127.0.0.1:8000/' . Route::currentRouteName() == route('characters')) ? 'active' : '' }}" href="{{ route('characters') }}">characters</a></li>
                <li><a class="{{ ('http://127.0.0.1:8000/' . Route::currentRouteName() == route('comics')) ? 'active' : '' }}" href="{{ route('comics') }}">comics</a></li>
                <li><a class="{{ ('http://127.0.0.1:8000/' . Route::currentRouteName() == route('movie')) ? 'active' : '' }}" href="{{ route('movie') }}">movies</a></li>
                <li><a class="{{ ('http://127.0.0.1:8000/' . Route::currentRouteName() == route('tv')) ? 'active' : '' }}" href="{{ route('tv') }}">tv</a></li>
                <li><a class="{{ ('http://127.0.0.1:8000/' . Route::currentRouteName() == route('game')) ? 'active' : '' }}" href="{{ route('game') }}">games</a></li>
                <li><a class="{{ ('http://127.0.0.1:8000/' . Route::currentRouteName() == route('collectibles')) ? 'active' : '' }}" href="{{ route('collectibles') }}">collectibles</a></li>
                <li><a class="{{ ('http://127.0.0.1:8000/' . Route::currentRouteName() == route('videos')) ? 'active' : '' }}" href="{{ route('videos') }}">videos</a></li>
                <li><a class="{{ ('http://127.0.0.1:8000/' . Route::currentRouteName() == route('fans')) ? 'active' : '' }}" href="{{ route('fans') }}">fans</a></li>
                <li><a class="{{ ('http://127.0.0.1:8000/' . Route::currentRouteName() == route('news')) ? 'active' : '' }}" href="{{ route('news') }}">news</a></li>
                <li><a class="{{ ('http://127.0.0.1:8000/' . Route::currentRouteName() == route('shop')) ? 'active' : '' }}" href="{{ route('shop') }}">shop</a></li>

            </ul>
        </nav>
        <div class="box-search-bar">
            <input type="text" placeholder="Search">

        </div>
    </div>
    <div class="jumbotron"></div>
</header>
