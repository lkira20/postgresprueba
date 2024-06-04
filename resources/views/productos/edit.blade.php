@extends('layout.app')

@section('content')
    <div class="card container mt-5">
        <div class="card-header">
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('index') }}">Volver</a>
            </div>
            <h1>Editar producto: {{ $producto->nombre }}</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('update', $producto->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group row mb-3">
                    <label for="nombre" for="nombre" class="col-xl-3 col-lg-3 col-form-label text-right">Nombre</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Ingresa el nombre del producto" value="{{ $producto->nombre ?? old('nombre') }}">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="descripcion" class="col-xl-3 col-lg-3 col-form-label text-right">Descripción</label>
                    <div class="col-lg-9 col-xl-6">
                        <textarea id="descripcion" class="form-control" name="descripcion" cols="30" rows="10"
                            placeholder="Ingresa la descripcion del producto">{{ $producto->descripcion ?? old('descripcion') }}</textarea>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="precio" class="col-xl-3 col-lg-3 col-form-label text-right">Precio</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="text" class="form-control" id="precio" name="precio"
                            placeholder="Ingresa el precio del producto" value="{{ $producto->precio ?? old('precio') }}">
                    </div>
                </div>


                <div class="text-end">
                    <button class="btn btn-primary" type="submit">Editar Producto</button>
                </div>
        </div>
    </div>
@endsection
