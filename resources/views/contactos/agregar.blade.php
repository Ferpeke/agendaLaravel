@extends('layout/agenda')

@section('tituloPagina', 'Agregar Contacto')


@section('contenido')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h4 class="display-6" style="font-family: monospace">Agregar nuevo contacto <i class="fa-solid fa-square-plus"></i></h4>
                    </div>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="d-flex justify-content-center" action="{{ route('contactos.store') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="d-sm-block formulario">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="categoria" aria-label="Seleccionar Catrgoria" name="categoria">
                                              <option selected>Selecciona una Categoria</option>
                                              @foreach ($categorias as $item)
                                                <option class="form-select" value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                                              @endforeach
                                            </select>
                                            <label for="categoria">Categorias</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="paterno" placeholder="Apellido paterno" required name="paterno" autocomplete="name">
                                            <label for="paterno">Apellido Paterno</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="materno" placeholder="Apellido materno" required name="materno" autocomplete="name">
                                            <label for="materno">Apellido Materno</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="nombre" placeholder="nombre de la categoria" required name="nombre" autocomplete="name">
                                            <label for="nombre">Nombre</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="telefono" placeholder="Número Telefonico" required name="telefono" pattern="[0-9]{10}" maxlength="10" autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                                            <label for="telefono">Telefono (+52)</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" placeholder="nombre de la categoria" required name="email" autocomplete="email">
                                            <label for="email">Correo Electronico</label>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <button class="btn btn-info w-50">Agregar <i class="fa-solid fa-circle-plus"></i></button>
                                            
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