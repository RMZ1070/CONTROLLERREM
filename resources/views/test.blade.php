<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        
        <div class="title m-b-md">
            {{$name}}
        </div>

        <div class="links">
            <a href="{{route('welcome')}}">home</a>
            <a href="{{route('toutindex')}}">Index</a>
            <a href="{{route('toutedit')}}">Edit</a>
            <a href="{{route('toutshow')}}">Show</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>