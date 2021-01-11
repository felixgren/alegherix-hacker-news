<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hackernews</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <header>
        <nav>
            <a href="{{route('welcome')}}">
                <p class="logo">Hackernews</p>
            </a>
            <section class="posts">
                <ul>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Newest</a></li>
                </ul>
            </section>
            <ul class="registerNav">
                @guest
                @if (Route::has('login'))
                <li class="">
                    <a class="" href="{{ route('login') }}">{{ __('Sign in') }}</a>
                </li>
                @endif
                <div class="separator"></div>
                @if (Route::has('register'))
                <li class="">
                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li>
                    <div class="userContainer">
                        <a class="" href="{{ route('settings') }}" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="separator"></div>

                        <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>

                    </div>
                </li>
                @endguest

            </ul>
        </nav>
    </header>
    <main class="content">
        @yield("content")
    </main>
</body>

</html>