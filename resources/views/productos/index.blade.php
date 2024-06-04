@extends('layout.app')

@section('content')
    <div class="card container mt-5">
        <div class="card-header">
            <a class="btn btn-primary float-end" href="{{ route('create') }}">Crear Producto</a>
            <h1>Lista de productos</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->descripcion }}</td>
                                <td>{{ number_format($producto->precio, 2) }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('show', $producto->id) }}">Ver</a>
                                    <a class="btn btn-warning" href="{{ route('edit', $producto->id) }}">Editar</a>
                                    <form action="{{ route('destroy', $producto->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-muted">
            {!! $productos->links('vendor.pagination.bootstrap-5') !!}
        </div>
    </div>
@endsection
