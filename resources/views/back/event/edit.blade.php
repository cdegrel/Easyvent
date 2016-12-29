@extends('back.template')

{{ Html::style('//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css') }}

@section('main')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Créer un nouvel évènement</h3>
            </div>

            <div class="title_right">
                <div class="pull-right">
                    <div class="btn-group">
                        {{ Form::submit('Sauvegarder', ['class' => 'btn btn-info', 'form' => 'edit_event']) }}
                        <button class="btn btn-info" type="button">Aperçu</button>
                        <button class="btn btn-success" type="button">Publier</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Formulaire de création <small>évènement</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a href="#step-1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">Etape 1<br />
                                            <small>Description de l'évènement</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">Etape 2<br />
                                            <small>Création des billets</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">Etape 3<br />
                                            <small>Paramètres supplémentaires</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>

                            {!! Form::open(['method' => 'put', 'url' => route('event.update', $event), 'class' => 'form-horizontal form-label-left', 'id' => 'edit_event']) !!}
                            <div id="step-1">
                                <h2 class="StepTitle" style="margin-left: 20px;">Description de l'évènement</h2>
                                <hr>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                                        {!! Form::label('title', "Titre de l'évènement * :") !!}
                                        {!! Form::text('title', $event->title, ['class' => 'form-control', 'placeholder' => 'Titre distinctif']) !!}
                                        {!! $errors->first('title', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                                        <label for="">Adresse * :</label>
                                        {!! Form::text('address', $event->address, ['class' => 'form-control', 'placeholder' => 'Adresse']) !!}
                                        {!! $errors->first('address', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        {!! Form::text('city', $event->city, ['class' => 'form-control', 'placeholder' => 'Ville']) !!}
                                        {!! $errors->first('city', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        {!! Form::text('postal_code', $event->postal_code, ['class' => 'form-control', 'placeholder' => 'Code postal']) !!}
                                        {!! $errors->first('postal_code', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                                        {!! Form::text('country', $event->country, ['class' => 'form-control', 'placeholder' => 'Pays']) !!}
                                        {!! $errors->first('country', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    </div>

                                    <input id="start_date" type="hidden" value="{{ date('d/m/Y H:m', strtotime($event->start_date)) }}">
                                    <input id="end_date" type="hidden" value="{{ date('d/m/Y H:m', strtotime($event->end_date)) }}">

                                    <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                                        {!! Form::label('date', "Date de l'évènement * :") !!}
                                        {!! Form::text('daterange', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12" id="map"></div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                                        {!! Form::label('description', "Description de l'évènement * :") !!}
                                        {!! Form::textarea('description', $event->description, ['class' => 'form-control', 'id' => 'desc_ckeditor']) !!}
                                        {!! $errors->first('description', '<small class="help-block" style="color: red;">:message</small>') !!}
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                                        {!! Form::label('organizer_id', "Nom de l'organisateur * :") !!}
                                        {!! Form::select('organizer_id', Auth::user()->organizer->pluck('name', 'id'), $event->organizer_id, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            <div id="step-2">
                                <h2 class="StepTitle" style="margin-left: 20px;">Création des billets</h2>
                                <hr>

                                <a onclick="addBillet('G')" class="btn btn-info">+ Billet gratuit</a>
                                <a onclick="addBillet('P')" class="btn btn-info">+ Billet payant</a>

                                <table class="table table-striped jambo_table">
                                    <thead>
                                    <tr>
                                        <td>Nom du billet</td>
                                        <td>Quantité disponible</td>
                                        <td>Prix</td>
                                        <td>Actions</td>
                                    </tr>
                                    </thead>
                                    <tbody id="tab_billet">
                                        @foreach($event->ticket as $ticket)
                                            <tr>
                                                <td>{!! Form::text('title', $ticket->title) !!}</td>
                                                <td>{!! Form::number('quantity', $ticket->quantity, ['min' => 1, 'step' => 10]) !!}</td>
                                                <td>{!! Form::number('price', $ticket->price) !!}</td>
                                                <td><a class="btn">Del</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div id="step-3">
                                <h2 class="StepTitle" style="margin-left: 20px;">Paramètres supplémentaires</h2>
                                <hr>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                                        {!! Form::label('category_id', "Catégorie * :") !!}
                                        {!! Form::select('category_id', $categories, $event->category_id, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12  form-group">
                                        {!! Form::label('type_id', "Type * :") !!}
                                        {!! Form::select('type_id', $types, $event->type_id, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Html::script('/js/back/jquery.smartWizard.js') !!}
    {!! Html::script('/vendor/unisharp/laravel-ckeditor/ckeditor.js') !!}


    <script>
        CKEDITOR.replace('desc_ckeditor');
    </script>
    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                timePicker24Hour: true,
                timePicker: true,
                timePickerIncrement: 10,
                locale: {
                    format: 'DD/MM/YYYY HH:mm',
                    applyLabel: 'OK',
                    cancelLabel: 'Annuler'
                },
                startDate: $('#start_date').val(),
                endDate: $('#end_date').val()
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#wizard').smartWizard();

            $('.buttonNext').addClass('btn btn-success');
            $('.buttonPrevious').addClass('btn btn-primary');
            $('.buttonFinish').addClass('btn btn-default');
        });

        function addBillet(type) {
            var tab_price = '<td>{!! Form::number('price', 0, ['disabled' => 'disabled']) !!}</td>';
            if(type != 'G') tab_price = '<td>{!! Form::number('price', 0) !!}</td>';
            $('#tab_billet').append('<tr>' +
                '<td>{!! Form::text('title', null) !!}</td>' +
                '<td>{!! Form::number('quantity', null, ['min' => 1, 'step' => 10]) !!}</td>' +
                tab_price +
                '<td><a class="btn">Del</a></td>' +
                '</tr>'
            );
        }
    </script>

@endsection

{!! Html::script('/js/back/moment.min.js') !!}
{!! Html::script('/js/back/daterangerpicker.js') !!}