@extends('layout/agenda')

@section('tituloPagina', 'Eliminar Contacto')


@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h4 class="display-6" style="font-family: monospace">Eliminar Contacto <i class="fa-solid fa-trash"></i></h4>
                    </div>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger" role="alert">
                                    <h2 class="display-3 text-center">¿Estas seguro de eliminar este Contacto?</h2>
                                    <hr>
                                    <h4 class="diplay-4 fw-bolder">Una vez eliminado, no podrás recuperarlo</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12">
            <div class="table-responsive text-center">
                <table class="table table-striped table-hover">
                    <caption>Contacto a Eliminar</caption>
                    <thead>
                        <tr>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $contacto->paterno }}</td>
                            <td>{{ $contacto->materno }}</td>
                            <td>{{ $contacto->nombre }}</td>
                            <td>{{ $contacto->telefono }}</td>
                            <td>{{ $contacto->email }}</td>
                            <td>{{ $contacto->nombre_categoria }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <form action="{{ route('contactos.destroy', $contacto->id_contacto) }}" method="POST">
                    <div class="btn-group mt-2" role="group">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar <i class="fa-solid fa-trash"></i></button>
                        <a href="{{ route('contactos.index') }}" class="btn btn-warning">Regresar <i class="fa-solid fa-arrow-rotate-left"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection