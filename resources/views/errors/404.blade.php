@extends('errors.template')

@section('error')

<section id="banner" data-video="images/banner">
    <div class="inner">
        <header>
            <h1>404</h1>
            <p>Il me semble que vous vous soyez perdu !</p>
        </header>
        <a href="{{ route('home') }}" class="button big alt scrolly">Repartir vers de nouvelle expérience !</a>
    </div>
</section>

@endsection