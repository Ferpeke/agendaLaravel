@extends('layout/agenda')

@section('tituloPagina', 'Editar Contacto')


@section('contenido')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h4 class="display-6" style="font-family: monospace">Editar Contacto <i class="fa-solid fa-file-pen"></i></h4>
                    </div>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="d-flex justify-content-center" action="{{ route('contactos.update', $contacto->id_contacto) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="d-sm-block formulario">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="categoria" aria-label="Seleccionar Catrgoria" name="categoria">
                                                @foreach ($categorias as $item)
                                                    @if ($item->id_categoria == $contacto->id_categoria)
                                                        <option selected value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                                    @else
                                                        <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <label for="categoria">Categorias</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="paterno" placeholder="Apellido paterno" required name="paterno" value="{{ $contacto->paterno }}">
                                            <label for="paterno">Apellido Paterno</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="materno" placeholder="Apellido materno" required name="materno" value="{{ $contacto->materno }}">
                                            <label for="materno">Apellido Materno</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="nombre" placeholder="nombre de la categoria" required name="nombre" value="{{ $contacto->nombre }}">
                                            <label for="nombre">Nombre</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="telefono" placeholder="Número Telefonico" required name="telefono" pattern="[0-9]{10}" maxlength="10" autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="{{ $contacto->telefono }}">
                                            <label for="telefono">Telefono</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" placeholder="nombre de la categoria" required name="email" value="{{ $contacto->email }}">
                                            <label for="email">Correo Electronico</label>
                                        </div>
                                        <div class="btn-group mt-3 text-center" role="group">
                                            <button class="btn btn-info">Editar <i class="fa-solid fa-user-pen"></i></button>
                                            <a href="{{ route('contactos.index') }}" class="btn btn-warning">Regresar <i class="fa-solid fa-arrow-rotate-left"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection