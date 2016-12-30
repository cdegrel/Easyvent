@extends('back.template')

@section('main')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Paramètre de votre profil participant</h3>
                <hr>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Informations du compte</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <img class="img-responsive avatar-view" src="/img/avatars/{{ $account->avatar }}" width="220" alt="Avatar" title="Changer avatar">
                            </div>
                        </div>
                        <h3>{{ $account->name }} {{ $account->first_name }}</h3>
                        <ul class="list-unstyled user_data">
                            <li>
                                <i class="fa fa-map-marker user-profile-icon"></i> {{ $account->city }}, {{ $account->country }}
                            </li>
                        </ul>
                        {!! Form::submit('Editer compte', ['class' => 'btn btn-success', 'files' => true, 'form' => 'edit_profile']) !!}
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                        {!! Form::open(['method' => 'put', 'url' => route('account.update', $account), 'class' => 'form-horizontal form-label-left', 'id' => 'edit_profile']) !!}


                        <h3>Coordonnées</h3>

                        <input name="id" type="hidden" value="{{ $account->id }}">

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            {!! Form::label('name', 'Nom * :') !!}
                            {!! Form::text('name', $account->name, ['class' => 'form-control']) !!}
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            {!! Form::label('first_name', 'Prénom * :') !!}
                            {!! Form::text('first_name', $account->first_name, ['class' => 'form-control']) !!}
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            {!! Form::label('phone', 'Téléphone fixe :') !!}
                            {!! Form::text('phone', $account->phone, ['class' => 'form-control']) !!}
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            {!! Form::label('mobile_phone', 'Mobile :') !!}
                            {!! Form::text('mobile_phone', $account->mobile_phone, ['class' => 'form-control']) !!}
                        </div>

                        <h3>Domicile</h3>

                        <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                            {!! Form::label('address', 'Adresse * :') !!}
                            {!! Form::text('address', $account->address, ['class' => 'form-control']) !!}
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            {!! Form::label('postal_code', 'Code postal * :') !!}
                            {!! Form::text('postal_code', $account->postal_code, ['class' => 'form-control']) !!}
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            {!! Form::label('city', 'Ville * :') !!}
                            {!! Form::text('city', $account->city, ['class' => 'form-control']) !!}
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                            {!! Form::label('country', 'Pays * :') !!}
                            {!! Form::text('country', $account->country, ['class' => 'form-control']) !!}
                        </div>

                        <h3 style="">Autre information</h3>

                        <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                            <label style="display: block">Sexe :</label>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                M: {!! Form::radio('sex', 'm', $account->sex == 'm' ? true : false) !!}
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                F: {!! Form::radio('sex', 'w', $account->sex == 'w' ? true : false) !!}
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                A: {!! Form::radio('sex', 'o', $account->sex == 'o' ? true : false) !!}
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                            {!! Form::label('avatar', 'Avatar * :') !!}
                            {!! Form::file('avatar', ['file_extension' => '.png']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Informations sensibles</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="col-md-6 col-sm-6 col-xs-12 profile_left">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        $(function(){

            var f_profile = $('form#edit_profile'),
                f_user = $('form#edit_user');

            f_profile.submit(function(e){
                 e.preventDefault();

                 var data = {
                     name: $('input[name="name"]').val(),
                     first_name: $('input[name="first_name"]').val(),
                     sex: $('input[checked="checked"]').val(),
                     address: $('input[name="address"]').val(),
                     postal_code: $('input[name="postal_code"]').val(),
                     city: $('input[name="city"]').val(),
                     country: $('input[name="country"]').val(),
                     phone: $('input[name="phone"]').val(),
                     mobile_phone: $('input[name="mobile_phone"]').val()
                 };

                 $.ajax({
                     url: '/account/'+$('input[name="id"]').val(),
                     type: 'PUT',
                     dataType: 'json',
                     data: data,

                     success: function (data) {

                     },
                     error: function (msg) {
                         swal({
                             title: 'ERREUR',
                             html: $('<div>')
                                 .addClass('some-class')
                                 .text(msg),
                             animation: false,
                             customClass: 'animated tada'
                         })
                     }
                 });
            });

            f_user.submit(function(e){
                e.preventDefault();


            });
        });
    </script>

@endsection