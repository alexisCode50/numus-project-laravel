@extends('layouts.admin')

@section('admin')
    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Editar Detalles</h1>

    <a href="{{route('details')}}" class="btn btn-warning btn-icon-split my-3">
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
            <form action="{{ route('details-update', $detail->id) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="unique_key_property">Clave de Propidad</label>
                        <input type="text" class="form-control" id="unique_key_property" name="unique_key_property" value="{{ $detail->unique_key_property }}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="size_property">Metros Construidos</label>
                        <input type="text" class="form-control" id="size_property" name="size_property" value="{{ $detail->size_property }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="size_land">Tamaño del Inmueble</label>
                        <input type="text" class="form-control" id="size_land" name="size_land" value="{{ $detail->size_land }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="bedroom">Recamaras</label>
                        <input type="number" class="form-control" id="bedroom" name="bedroom" value="{{ $detail->bedroom }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="complete_bathroom">Baños Completos</label>
                        <input type="number" class="form-control" id="complete_bathroom" name="complete_bathroom" value="{{ $detail->complete_bathroom }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="half_baths">Medios Baños</label>
                        <input type="number" class="form-control" id="half_baths" name="half_baths" value="{{ $detail->half_baths }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="garage">Garage</label>
                        <input type="number" class="form-control" id="garage" name="garage" value="{{ $detail->garage }}" >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="map">Mapa</label>
                        <textarea class="form-control" id="map" name="map" rows="3">{{ $detail->map }}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="pool">Picina</label>
                        <select class="form-control" id="pool" name="pool" value="{{ $detail->pool }}">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success btn-icon-split my-3">
                    <span class="text">Guardar</span>
                </button>
            </form>
        </div>
    </div>

@endsection