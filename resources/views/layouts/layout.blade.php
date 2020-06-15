<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <header class="header col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="logo">Laravel Tutorial</h1>
                <p class="description">It's a simple to do list.</p>
                @if(Auth::check())
                <div class="user-info">
                    <p><a href="/todolist/settings">{{ $name }}(Settings)</a></p></a>
                    <p><a href="/logout">Logout</a></p>
                </div>
                <div class="search-box">
                    <form action="/todolist/search" method="GET" class="search-form form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control query" name="query" />
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                @endif
            </header>
            <main class="main col-sm-12 col-md-12 col-lg-12 col-xl-12">
                @yield('content')
            </main>
            <footer class="footer col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <p>&copy Laravel Tutorial</p>
            </footer>
        </div>
    </div>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    @yield('javascript')
</body>
</html>
