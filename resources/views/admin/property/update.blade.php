@extends('layouts.admin')

@section('admin')
    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Editar Propiedad</h1>

    <a href="{{ route('properties-en') }}" class="btn btn-warning btn-icon-split my-3">
        <span class="text">Regresar</span>
    </a>

    <div class="row">
        <div class="col-md-4 m-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-10 m-auto">
            <form action="{{ route('properties-update-en', $property->id) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="unique_key">Clave Unica</label>
                        <input type="text" class="form-control" id="unique_key" name="unique_key" value="{{ $property->unique_key }}" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="title">Nombre</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $property->title }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="direction">Dirección</label>
                        <input type="text" class="form-control" id="direction" name="direction" value="{{ $property->direction }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="location_id">Ubicación</label>
                        <select class="form-control" id="location_id" name="location_id" value="{{ $property->location_id }}">
                            @foreach ($locations as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $property->description }}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="type_property">Tipo de Propiedad</label>
                        <input type="text" class="form-control" id="type_property" name="type_property" value="{{ $property->type_property }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="price">Precio</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $property->price }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state_property">Estado de Propiedad</label>
                        <select class="form-control" id="state_property" name="state_property" value="{{ $property->state_property }}">
                            <option>Venta</option>
                            <option>Renta</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="amenities">Amenidades</label>
                        <textarea class="form-control" id="amenities" name="amenities" rows="3">{{ $property->amenities }}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="outstanding">Destacado</label>
                        <select class="form-control" id="outstanding" name="outstanding" value="{{ $property->outstanding }}">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-icon-split my-3">
                    <span class="text">Guardar Cambios</span>
                </button>
            </form>
        </div>
    </div>

@endsection