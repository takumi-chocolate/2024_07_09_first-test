<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/common.css/') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>
<body>
    <header class="atte">
        <div class="atte__header">
            <a href="/" class="header__logo">
                Atte
            </a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer">
            <small> Atte, inc.</small>
        </div>
    </footer>
</body>
</html>