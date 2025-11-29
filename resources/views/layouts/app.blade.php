<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
</head>
<body>
    @if(!request()->is('login'))
        <nav class="border-bottom pb-1 mb-2">

            <a href="/conferences" class="btn btn-secondary m-1">{{__('app.allConferences')}}</a>
            @auth
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger m-1">{{__('app.logout')}}</button>
                </form>
            @endauth
            @guest
                <a href="/login" class="btn btn-success m-1">{{__('app.login')}}</a>
            @endguest

    </nav>
    @endif
    <div class="container py-4">
        <div class="content-wrapper mx-auto">
            @yield("content")
        </div>
    </div>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>
