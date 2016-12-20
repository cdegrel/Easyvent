<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easyvent</title>

    {!! Html::script('js/jquery.min.js') !!}
</head>
<body>

    <header>

    </header>

    <main>
        @yield('main')
    </main>

    <footer>

    </footer>

</body>
</html>