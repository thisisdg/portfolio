<header class="header-color header-border">
    <div class="flex-box marginal-display items-align-center">
        <button class="menu-toggle-closed position-relative">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="flex-center sticky-top m-b-md-reduced m-t-md-reduced full-width">
            <div class="position-ref">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                @endif
                
                @include('svg/logo_svg')

                <div class="slide-menu-top content left hide">
                    <div class="links">
                        <a href="{{ route('devprofile') }}">Developer Profile</a>
                        <a href="{{ url('/developer/developer-story') }}">Developer Story</a>
                        <a href="javascript:void(0)">Blog</a>
                        <a href="{{ url('/developer/contact-me') }}">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>