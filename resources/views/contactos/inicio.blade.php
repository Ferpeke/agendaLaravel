@extends('layout/agenda')

@section('tituloPagina', 'Contactos')


@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h4 class="display-6" style="font-family: monospace">Contactos <i class="fa-solid fa-address-card"></i></h4>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{ route('contactos.create') }}" class="btn btn-info btn-lg">Agregar nuevo Contacto <i class="fa-solid fa-circle-plus"></i></a>
                </div>
            </div>
            @if ($mensaje = Session::get('success'))
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                  </svg>
                  <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        {{ $mensaje }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="col-sm-12 mt-3">
            <hr>
            <div class="table-responsive">
                <table class="table table-info table-striped" id="tablaContactos">
                    <thead>
                        <tr>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Categoria</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($listado as $item)
                        <tr>
                            <td>{{ $item->paterno }}</td>
                            <td>{{ $item->materno }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nombre_categoria }}</td>
                            <td>
                                <a href="{{ route('contactos.edit', $item->id_contacto) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('contactos.show', $item->id_contacto) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
@endsection

@section('dataTable')
    <script>
        $(document).ready(()=>{
            $('#tablaContactos').DataTable();
        });
    </script>    
@endsection