@extends('front.template')

@section('main')

    <section id="banner" style="background-image: url(/img/avatars/default.png)">
        <div class="inner">
            <header>
                <h1>{{ $event->title }}</h1>
                <p>Créez, vivez et partagez des experiences uniques gâce à notre plateforme évènementielle<br />
                    Organiser des évènements n'a jamais été aussi simple.</p>
            </header>
            <a href="#main" class="button big alt scrolly">Venez découvrir !</a>
        </div>

    </section>

    <section class="wrapper style1">
        <div class="inner">

            <div class="row 200%">
                <div class="4u 12u$(medium)">
                    <blockquote>
                        <h3>DATE ET HEURE</h3>
                        <p>
                            Le {{ date('l d F Y', strtotime($event->start_date)) }}<br>
                            de {{ date('H:i', strtotime($event->start_date)) }} à {{ date('H:i', strtotime($event->end_date)) }}
                        </p>
                    </blockquote>

                    <blockquote>
                        <h3>ADRESSE</h3>
                        <p><span id="address">{{ $event->address }}</span><br>{{ $event->postal_code }} {{ $event->city }}<br>{{ $event->country }}</p>
                        <p><a href="#map" style="color: dodgerblue;">Voir la carte</a></p>
                    </blockquote>
                </div>

                <div class="8u$ 12u$(medium)">
                    <h3>DESCRIPTION</h3>
                    <div class="box" style="background-color: #dedede; color: #333;">
                        <p>{{ $event->description }}</p>
                    </div>

                    <h5>PATAGER AVEC VOS AMIS</h5>
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper style2">
        <div class="inner">
            <header class="align-center">
                <h2>{{ $event->organizer->name }}</h2>
                <p>Une petit desc</p>
                <hr>
            </header>

            <div class="row">
                <section class="3u 6u(medium) 12u$(small)">
                    <p><i class="fa "></i>Site Web : <a href="{{ $event->organizer->website }}" style="color: dodgerblue;">{{ $event->organizer->website }}</a></p>
                </section>
                <section class="3u 6u(medium) 12u$(small)">
b
                </section>
                <section class="3u 6u(medium) 12u$(small)">
c
                </section>
            </div>

            <div class="box" style="background-color: #dedede; color: #333;">
                {{ $event->organizer->description }}
            </div>
        </div>
    </section>

    <section class="wrapper 3">
        <div class="inner" id="map">

        </div>
    </section>

@endsection