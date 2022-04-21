@extends('layout/agenda')

@section('tituloPagina', 'Inicio')


@section('contenido')
    <div class="row align-items-start">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h4 class="display-6" style="font-family: monospace">Esta es una Agenda sencilla con Laravel 8</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <img src="{{ asset('img/header.gif') }}" alt="" width="100%">
                                <h5 class="display-6" style="font-family: 'Indie Flower', cursive;">
                                   "Esta es mi primera Agenda con laravel 8"
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection