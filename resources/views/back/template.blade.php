<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel admin</title>

    {!! Html::script('/js/jquery.min.js') !!}

    {!! Html::style('/css/bootstrap.min.css') !!}
    {!! Html::style('/css/font-awesome.min.css') !!}
    {!! Html::style('/css/sweetalert2.min.css') !!}
    {!! Html::style('/css/back.css') !!}
</head>
<body class="nav-md">

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{!! route('dashboard') !!}" class="site_title"><span>Easyvent</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="/img/avatars/{{ Auth::user()->account->avatar }}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bonjour,</span>
                            <h2>{{ Auth::user()->account->name }} {{ Auth::user()->account->first_name }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li>
                                    <a href="{!! route('account.edit', Auth::user()->id) !!}">
                                        <i class="fa fa-user"></i> Profil
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-group"></i>Organisateurs <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li><a href="{!! route('organizer.create') !!}">Créer nouvel organisateur</a></li>
                                        <li><a href="{!! route('organizer.index') !!}">Liste organisateurs</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa"></i>Evenements <span class="fa fa-chevron-down"></span>
                                    </a>
                                    <ul class="nav child_menu">
                                        <li><a href="{!! route('event.create') !!}">Créer nouveau évènement</a></li>
                                        <li><a href="{!! route('event.index') !!}">Liste évènements</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a href="{!! route('home') !!}" data-toggle="tooltip" data-placement="top" title="Retour site">
                            <i class="fa fa-home"></i>
                        </a>
                        <a onclick="element.requestFullScreen();" data-toggle="tooltip" data-placement="top" title="Plein ecran">
                            <i class="fa fa-arrows-alt"></i>
                        </a>
                        <a href="" data-toggle="tooltip" data-placement="top" title="Rafraichir page">
                            <i class="fa fa-refresh"></i>
                        </a>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="top" title="Deconnection">
                            <i class="fa fa-power-off"></i>
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="/img/avatars/{{ Auth::user()->account->avatar }}" alt="">{{ Auth::user()->account->name }} {{ Auth::user()->account->first_name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('main')
            </div>

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Panel administration - <a href="{!! route('home') !!}">Easyvent</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    {!! Html::script('/js/back/bootstrap.min.js') !!}
    {!! Html::script('/js/sweetalert2.min.js') !!}
    {!! Html::script('/js/back/back.js') !!}
    {!! Html::script('/js/back/daterangepicker.js') !!}
    {!! Html::script('/js/back/moment.min.js') !!}
    {!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyADuY6gi1tLF2OCwMbvX28dm6FFE8fnsvc&libraries=places') !!}

</body>
</html>