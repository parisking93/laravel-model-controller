<header>
    <div class="header-bar">

    </div>
    <div class="container-center">
        <div class="container-logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="dc comics">
        </div>
        <nav>
            <ul>
                <li><a class="{{ (Request::url() == route('characters')) ? 'active' : '' }}" href="{{ route('characters') }}">characters</a></li>
                <li><a class="{{ (Request::url() == route('comics')) ? 'active' : '' }}" href="{{ route('comics') }}">comics</a></li>
                <li><a class="{{ (Request::url() == route('movie')) ? 'active' : '' }}" href="{{ route('movie') }}">movies</a></li>
                <li><a class="{{ (Request::url() == route('tv')) ? 'active' : '' }}" href="{{ route('tv') }}">tv</a></li>
                <li><a class="{{ (Request::url() == route('game')) ? 'active' : '' }}" href="{{ route('game') }}">games</a></li>
                <li><a class="{{ (Request::url() == route('collectibles')) ? 'active' : '' }}" href="{{ route('collectibles') }}">collectibles</a></li>
                <li><a class="{{ (Request::url() == route('videos')) ? 'active' : '' }}" href="{{ route('videos') }}">videos</a></li>
                <li><a class="{{ (Request::url() == route('fans')) ? 'active' : '' }}" href="{{ route('fans') }}">fans</a></li>
                <li><a class="{{ (Request::url() == route('news')) ? 'active' : '' }}" href="{{ route('news') }}">news</a></li>
                <li><a class="{{ (Request::url() == route('shop')) ? 'active' : '' }}" href="{{ route('shop') }}">shop</a></li>

            </ul>
        </nav>
        <div class="box-search-bar">
            <input type="text" placeholder="Search">

        </div>
    </div>
    <div class="jumbotron"></div>
</header>
