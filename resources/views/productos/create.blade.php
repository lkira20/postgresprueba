@extends('layout.app')

@section('content')
    <div class="card container mt-5">
        <div class="card-header">
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('index') }}">Volver</a>
            </div>
            <h1>Crea un producto</h1>
        </div>
        <div class="card-body">
            <form action="{{route('store')}}" method="POST">
                @csrf

                <div class="form-group row mb-3">
                    <label for="nombre" class="col-xl-3 col-lg-3 col-form-label text-right">Nombre <span class="text-danger">
                            *</span> </label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Ingresa el nombre del producto" value="{{ old('nombre') }}">
                    </div>
                </div>
                <div class="form-group row  mb-3">
                    <label for="descripcion" class="col-xl-3 col-lg-3 col-form-label text-right">Descripción <span
                            class="text-danger"> *</span></label>
                    <div class="col-lg-9 col-xl-6">
                        <textarea id="descripcion" class="form-control" name="descripcion" cols="30" rows="10"
                            placeholder="Ingresa la descripcion del producto">{{ old('precio') }}</textarea>
                    </div>
                </div>

                <div class="form-group row  mb-3">
                    <label for="precio" class="col-xl-3 col-lg-3 col-form-label text-right">Precio <span class="text-danger">*</span></label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="number" step="any" class="form-control" id="precio" name="precio"
                            placeholder="Ingresa el precio del producto" value="{{ old('precio') }}">
                    </div>
                </div>
                <div class="text-end">
                    <button class="btn btn-primary">Crear Producto</button>
                </div>

            </form>
        </div>
    </div>
@endsection
