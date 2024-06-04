@extends('layout.app')

@section('content')
    <div class="card container mt-5">
        <div class="card-header">
            <h1 class="text-center">producto: {{ $producto->nombre }}</h1>
        </div>
        <div class="card-body">

            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ $producto->id }}</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>{{ $producto->nombre }}</td>
                    </tr>
                    <tr>
                        <th>Descripción</th>
                        <td>{{ $producto->descripcion }}</td>
                    </tr>
                    <tr>
                        <th>Precio</th>
                        <td>{{ $producto->precio }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-end">
                <a class="btn btn-primary" href="{{route('index')}}">Volver</a>
            </div>
        </div>
    </div>
@endsection
