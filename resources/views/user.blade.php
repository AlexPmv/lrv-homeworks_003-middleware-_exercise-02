<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    
</head>
<body>
    <div id="app">
      <div class="container">
        <p class="user-data">
          {{ __('name: ') }} {{ Auth::user()->name }}
        </p>
        <p class="user-data">
          {{ __('email: ') }} {{ Auth::user()->email }}
        </p>
        <p class="user-data">
        {{ __('id: ') }} {{ Auth::user()->id }}
        </p>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <br>
            <a class="dropdown-item" href="{{ route('home') }}">
                {{ __('Home') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
      </div> 
</body>
</html>
