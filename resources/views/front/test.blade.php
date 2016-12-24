<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {!! Html::style('css/front.css')!!}

    {!! Html::script('js/jquery.min.js') !!}

    <style>
        .ticket-card {
            margin-top: 15vh;
            margin-bottom: 15vh;
            background: #FFFFFF;
            border-radius: 4px;
        }
        .ticket-card:hover .cover img, .ticket-card.active .cover img {
            -moz-transform: translate(0, -50px);
            -o-transform: translate(0, -50px);
            -ms-transform: translate(0, -50px);
            -webkit-transform: translate(0, -50px);
            transform: translate(0, -50px);
            box-shadow: 0 10px 20px -4px rgba(22, 22, 22, 0.5);
        }
        .ticket-card .cover {
            border-radius: 4px 4px 0 0;
            position: relative;
            margin: 15px;
        }
        .ticket-card .cover img {
            width: 100%;
            position: relative;
            z-index: 2;
            margin-top: -30px;
            box-shadow: 0 10px 16px -6px rgba(22, 22, 22, 0.5);
            border-radius: 4px;
            -moz-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
            -webkit-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
            -moz-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
            -o-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
            -ms-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
            transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
        }
        .ticket-card .cover .info {
            position: absolute;
            width: 100%;
            bottom: 0px;
            padding: 0 15px;
            color: #777777;
        }
        .ticket-card .cover .info .going,
        .ticket-card .cover .info .tickets-left {
            padding-bottom: 10px;
            border-bottom: 1px solid #f3f3f3;
            width: 50%;
        }
        .ticket-card .cover .info .going {
            float: left;
        }
        .ticket-card .cover .info .tickets-left {
            float: right;
            text-align: right;
        }
        .ticket-card .cover .info .fa {
            color: #CCCCCC;
            margin-right: 5px;
        }
        .ticket-card .artist {
            float: left;
        }
        .ticket-card .artist .info {
            font-weigth: 600;
            font-size: 12px;
            text-transform: uppercase;
            color: #BBBBBB;
            margin-bottom: 0;
        }
        .ticket-card .artist .name {
            font-weight: 200;
            font-size: 22px;
            margin-top: 5px;
        }
        .ticket-card .ticket {
            float: left;
        }
        .ticket-card .ticket small {
            font-size: 75%;
        }
        .ticket-card .price {
            float: right;
            text-align: right;
        }
        .ticket-card .price .from {
            color: #BBBBBB;
        }
        .ticket-card .price .value {
            font-size: 28px;
            font-weight: 200;
            color: #00bbff;
            margin-top: -5px;
        }
        .ticket-card .price .value b {
            font-size: 18px;
            font-weight: 200;
        }
        .ticket-card .list-unstyled {
            max-height: 200px;
            overflow-x: scroll;
            background: #EEEEEE;
            margin-bottom: 0;
            box-shadow: inset 0px 4px 10px rgba(0, 0, 0, 0.25);
        }
        .ticket-card .list-unstyled li {
            border-bottom: 1px dotted #CCCCCC;
            padding: 5px 30px;
            overflow: hidden;
            width: 100%;
            display: block;
            position: relative;
        }
        .ticket-card .list-unstyled li .btn-buy {
            position: absolute;
            right: 15px;
            top: 13px;
            padding: 8px 20px;
            border-radius: 6px;
            background: #00bbff;
            border: 0;
            opacity: 0;
            -webkit-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
            -moz-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
            -o-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
            -ms-transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
            transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 300ms ease, opacity 300ms ease;
        }
        .ticket-card .list-unstyled li:hover .btn-buy {
            opacity: 1;
        }
        .ticket-card .list-unstyled li:last-child {
            border-bottom: none;
        }
        .ticket-card .list-unstyled li:before, .ticket-card .list-unstyled li:after {
            display: table;
            content: " ";
            clear: both;
        }
        .ticket-card .list-unstyled li .price .value {
            color: #444444;
            font-size: 22px;
            margin-top: 10px;
        }
        .ticket-card .body {
            padding: 5px 30px;
        }
        .ticket-card .body .info {
            color: #777777;
        }
        .ticket-card .body .location,
        .ticket-card .body .date {
            padding-top: 10px;
            width: 50%;
        }
        .ticket-card .body .location {
            float: left;
        }
        .ticket-card .body .date {
            float: right;
            text-align: right;
        }
        .ticket-card .body .fa {
            color: #CCCCCC;
            margin-right: 5px;
        }
        .ticket-card .footer .btn {
            width: 100%;
            background: transparent;
            border-top: 1px dotted #BBBBBB;
            border-radius: 0;
            padding: 15px 8px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            color: #666666;
            box-shadow: none;
        }
        .ticket-card .footer .btn:focus, .ticket-card .footer .btn:hover, .ticket-card .footer .btn:active {
            outline: none !important;
        }

    </style>
</head>
<body>

<header id="header">
    <h1><a href="#">Easyvent</a></h1>
    <ul id="ul-menu" style="list-style-type: none; margin: 0 auto;">
        <li style="display: inline; position: relative; bottom: 11px; font-weight: 700; padding-right: 25px;"><a href="">PARCOURIR</a></li>
        <li style="display: inline; position: relative; bottom: 11px; font-weight: 700; padding-right: 25px;"><a href="">CONTACT</a></li>
        <li style="display: inline; padding-right: 35px; position: relative; top: 3px;"><a href=""><img height="40" src="img/icon/user.png" alt=""></a></li>
    </ul>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="generic.html">Generic</a></li>
        <li><a href="elements.html">Elements</a></li>
    </ul>
</nav>

<section id="banner" data-video="images/banner">
    <div class="inner">
        <header>
            <h1>Easyvent</h1>
            <p>Créez, vivez et partagez des experiences uniques gâce à notre plateforme évènementielle<br />
                Organiser des évènements n'a jamais été aussi simple.</p>
        </header>
        <a href="#main" class="button big alt scrolly">C'est parti !</a>
    </div>

</section>

<section class="wrapper style1">
    <div class="inner">

        <a href="{!! route('events.create') !!}">Event création</a>
        
        <div class="flex flex-3">

            @foreach($events as $event)

            <div class="col">
                <div class="ticket-card">
                    <div class="cover">
                        <img src="http://s28.postimg.org/p916fev0t/week.jpg" alt="" />
                        <div class="info">
                            <div class="going">
                                <i class="fa fa-group"></i>
                            </div>
                            <div class="tickets-left">
                                <i class="fa fa-ticket"></i>
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <div class="artist">
                            <h6 class="info">{{ $event->title }}</h6>
                            <h4 class="name">{{ $event->start_date }}</h4>
                        </div>
                        <div class="price">
                            <div class="from">From</div>
                            <div class="value">
                                <b>$</b>599
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</section>

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


{!! Html::script('js/jquery.scrolly.min.js') !!}
{!! Html::script('js/skel.min.js') !!}
{!! Html::script('js/util.js') !!}
{!! Html::script('js/main.js') !!}

</body>
</html>