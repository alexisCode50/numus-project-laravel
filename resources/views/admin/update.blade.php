@extends('layouts.admin')

@section('admin')
    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Editar Propiedad</h1>

    <a href="/admin" class="btn btn-warning btn-icon-split my-3">
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
        <div class="col-md-8 m-auto">
            <form action="{{ route('properties-create') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title">Nombre</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="direction">Dirección</label>
                        <input type="text" class="form-control" id="direction" name="direction">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="location">Ubicación</label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="type_property">Tipo de Propiedad</label>
                        <input type="text" class="form-control" id="type_property" name="type_property">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="price">Precio</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state_property">Estado de Propiedad</label>
                        <select class="form-control" id="state_property" name="state_property">
                            <option>Venta</option>
                            <option>Renta</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="size_property">Dimenciones</label>
                        <input type="text" class="form-control" id="size_property" name="size_property">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="bedroom">Cuartos</label>
                        <input type="number" class="form-control" id="bedroom" name="bedroom">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="bathroom">Baños</label>
                        <input type="number" class="form-control" id="bathroom" name="bathroom">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="garage">Garage</label>
                        <input type="number" class="form-control" id="garage" name="garage">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="type_property">Latitud</label>
                        <input type="text" class="form-control" id="latitude_map" name="latitude_map">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="longitude_map">Longitud</label>
                        <input type="text" class="form-control" id="longitude_map" name="longitude_map">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="amenities">Amenidades</label>
                        <textarea class="form-control" id="amenities" name="amenities" rows="3"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-icon-split my-3">
                    <span class="text">Guardar</span>
                </button>
            </form>
        </div>
    </div>

@endsection