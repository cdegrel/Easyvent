@extends('front.template')

@section('main')

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


            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                vous êtes bien connecté  !

                <a href="{!! route('dashboard') !!}">Event création</a>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif

        </div>
    </section>

@endsection