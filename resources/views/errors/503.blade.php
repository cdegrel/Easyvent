@extends('errors.template')

@section('error')

    <section id="banner" data-video="images/banner">
        <div class="inner">
            <header>
                <h1>503</h1>
                <p>Un problème provenant du serveur est survenu !</p>
            </header>
            <a href="{{ route('home') }}" class="button big alt scrolly">Repartir vers de nouvelle expérience !</a>
        </div>
    </section>

@endsection