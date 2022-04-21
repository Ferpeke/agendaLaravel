@extends('layout/agenda')

@section('tituloPagina', 'Agregar categoria')


@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h4 class="display-6" style="font-family: monospace">Agregar nueva categoria <i class="fa-solid fa-square-plus"></i></h4>
                    </div>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="d-flex justify-content-center" action="{{ route('categorias.store') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="d-sm-block formulario">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="nombre" placeholder="nombre de la categoria" required name="nombre" autocomplete="username">
                                            <label for="nombre">Nombre</label>
                                        </div>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Descripcion de la categoria" id="descripcion" name="descripcion" autocomplete="off"></textarea>
                                            <label for="descripcion">Descripcion</label>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <button class="btn btn-success w-50">Agregar <i class="fa-solid fa-circle-plus"></i></button>
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