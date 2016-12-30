<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easyvent</title>

    {!! Html::style('/css/front.css')!!}
    {!! Html::script('/js/jquery.min.js') !!}
</head>
<body>

    <header id="header">
        <h1><a href="{!! route('home') !!}">Easyvent</a></h1>
        <ul id="ul-menu" style="list-style-type: none; margin: 0 auto;">
            <li style="@if(!Auth::guest()) bottom: 11px; position: relative; @endif display: inline; font-weight: 700; padding-right: 25px;"><a href="">PARCOURIR</a></li>
            @if(Auth::guest()) <li style="display: inline; font-weight: 700; padding-right: 25px;"><a href="">SE CONNECTER</a></li>
            @else <li style="display: inline; padding-right: 35px; position: relative; top: 3px;"><a href=""><img height="40" src="/uploads/avatars/{{ Auth::user()->account->avatar }}" alt=""></a></li>
            @endif
        </ul>
        <a href="#menu">Menu</a>
    </header>

    <nav id="menu">
        <ul class="links">
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.html">Generic</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
    </nav>

    <main id="main">
        @yield('main')
    </main>

    <footer id="footer">
        <div class="inner">
            <div class="flex flex-3">
                <div class="col">
                    <h3>Vestibullum</h3>
                    <ul class="alt">
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                        <li><a href="#">Vis id faucibus montes tempor</a></li>
                        <li><a href="#">Massa amet lobortis vel.</a></li>
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Lobortis</h3>
                    <ul class="alt">
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                        <li><a href="#">Vis id faucibus montes tempor</a></li>
                        <li><a href="#">Massa amet lobortis vel.</a></li>
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Accumsan</h3>
                    <ul class="alt">
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                        <li><a href="#">Vis id faucibus montes tempor</a></li>
                        <li><a href="#">Massa amet lobortis vel.</a></li>
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
            </ul>
            &copy; 2017. <a href="http://www.univ-fcomte.fr">univ-fcomte.fr</a> - by <a href="">DEGRELLE Cédric</a> & <a href="">HECHT Adam</a>
        </div>
    </footer>

    {!! Html::script('/js/jquery.scrolly.min.js') !!}
    {!! Html::script('/js/skel.min.js') !!}
    {!! Html::script('/js/util.js') !!}
    {!! Html::script('/js/main.js') !!}

</body>
</html>