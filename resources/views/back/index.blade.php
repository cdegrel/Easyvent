@extends('back.template')

@section('main')

    <div class="">
        <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                    <div class="count">{{ Auth::user()->participate->count() }}</div>
                    <h3>Participation @if(Auth::user()->participate->count() != 1) évènements @else évènement @endif</h3>
                    <p>Depuis le premier evenement</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-comments-o"></i></div>
                    <div class="count">{{ Auth::user()->organizate->count() }}</div>
                    <h3>Organisation @if(Auth::user()->organizate->count() != 1) évènements @else évènement @endif</h3>
                    <p>Depuis le premier evenement</p>
                </div>
            </div>
        </div>
    </div>

@endsection
