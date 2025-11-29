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
        <nav style="padding-bottom: 10px;">

        @auth
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">{{__('app.logout')}}</button>
            </form>
        @endauth

        @guest
            <a href="/login">{{__('app.login')}}</a>
        @endguest
    </nav>
    @endif
    @yield("content")
</body>
</html>
