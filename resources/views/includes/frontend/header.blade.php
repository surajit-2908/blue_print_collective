<header class="mainHeader {{ Route::is('index') ? 'homeHeader' : 'innerHeader' }}">
    <div class="container">
        <div class="dFlx spaceBet alignCenter">
            <div class="logo">
                @if (Route::is('index'))
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-white.png') }}" alt="" /></a>
                @else
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-black.png') }}" alt=""></a>
                @endif
            </div>

            <div class="headerMenu">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="{{ Route::is('index') ? 'active' : '' }}"><a href="{{ route('index') }}">Home</a>
                            </li>

                            <li class="{{ Route::is('service') ? 'active' : '' }}"><a
                                    href="{{ route('service') }}">Service</a></li>

                            <li class="{{ Route::is('about') ? 'active' : '' }}"><a
                                    href="{{ route('about') }}">About</a></li>

                            <li class="{{ Route::is('contact') ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span><span></span><span></span><span></span>
            </button>

            <div class="searchIcon">
                @if (Route::is('index'))
                    <a data-toggle="modal" data-target="#headerSearchModal" href="#"><img
                            src="{{ asset('assets/images/hdr-search-icon-white.png') }}" alt="" /></a>
                @else
                    <a data-toggle="modal" data-target="#headerSearchModal" href="#"><img
                            src="{{ asset('assets/images/hdr-search-icon-black.png') }}" alt="" /></a>
                @endif
            </div>
        </div>
    </div>
</header>
