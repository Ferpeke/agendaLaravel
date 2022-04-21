@extends('layout/agenda')

@section('tituloPagina', 'Eliminar Categoria')


@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h4 class="display-6" style="font-family: monospace">Eliminar categoria <i class="fa-solid fa-trash"></i></h4>
                    </div>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger" role="alert">
                                    <h2 class="display-3 text-center">¿Estas seguro de eliminar esta Categoria?</h2>
                                    <hr>
                                    <h4 class="diplay-4 fw-bolder">Una vez eliminado, no podrás recuperarlo</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger" role="alert">
                                    <table class="table table-striped table-responsive{-sm|-md|-lg|-xl} text-center">
                                        <thead>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $categorias->nombre }}</td>
                                                <td>{{ $categorias->descripcion }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <form method="POST" action="{{ route('categorias.destroy', $categorias->id_categoria) }}">
                                    <div class="btn-group mt-2" role="group">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" aria-current="page">Eliminar  <i class="fa-solid fa-trash-can"></i></button>
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