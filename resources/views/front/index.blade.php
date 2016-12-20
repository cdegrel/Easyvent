@extends('front.template')

@section('main')

    @foreach($events as $event)
        {{ $event->title }}<br>
        {{ $event->description }}<br>
        {{ $event->start_date }}<br>
        {{ $event->end_date }}
    @endforeach

    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
    @else
        {{ Auth::user()->name }}: vous êtes bien connecté  !

        <a href="">Panel admin</a>
        <a href="{{ url('/logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endif

@endsection