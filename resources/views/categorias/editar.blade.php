@extends('layout/agenda')

@section('tituloPagina', 'Editar Categoria')


@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h4 class="display-6" style="font-family: monospace">Editar categoria <i class="fa-solid fa-pen-to-square"></i></h4>
                    </div>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('categorias.update', $categorias->id_categoria) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nombre" placeholder="nombre de la categoria" required name="nombre" value="{{ $categorias->nombre }}">
                                        <label for="nombre">Nombre</label>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Descripcion de la categoria" id="descripcion" name="descripcion">{{ $categorias->descripcion }}</textarea>
                                        <label for="descripcion">Descripcion</label>
                                    </div>
                                    <div class="btn-group mt-3" role="group">
                                        <button class="btn btn-success" aria-current="page">Actualizar  <i class="fa-solid fa-arrows-rotate"></i></button>
                                        <a href="{{ route('categorias.index') }}" class="btn btn-warning">Regresar <i class="fa-solid fa-arrow-rotate-left"></i></a>
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