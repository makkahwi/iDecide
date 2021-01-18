<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('htmlHead')

    <style>
        .full-height {
            height: 100vh;
        }
    </style>

    <body>
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
                    <a href="{{ url('/') }}"><img src="img/Logo.png" alt=""></a>
                </div>

                <br>

                <h3><u>Helping students to pick the most suitable degree program for them</u><br><br></h3>

                <div class="links">
                    <a href="{{ url('/about') }}">About i<span style="font-style: italic;">Decide</span></a>
                    <a href="{{ url('/launch') }}">First Time Use</a>
                    <a href="{{ url('/feedback') }}">Feedback / Rate the System</a>
                </div>
            </div>
        </div>
    </body>
</html>
