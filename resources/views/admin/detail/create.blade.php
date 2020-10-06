@extends('layouts.admin')

@section('admin')
    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Registar Detalles</h1>

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
            <form action="{{ route('details-create') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="unique_key_property">Clave de Propidad</label>
                        <input type="text" class="form-control" id="unique_key_property" name="unique_key_property">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="size_property">Metros Construidos</label>
                        <input type="text" class="form-control" id="size_property" name="size_property">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="size_land">Tamaño del Terreno</label>
                        <input type="text" class="form-control" id="size_land" name="size_land">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="front_land">Frente del terreno</label>
                        <input type="text" class="form-control" id="front_land" name="front_land">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="back_land">Fondo del terreno</label>
                        <input type="text" class="form-control" id="back_land" name="back_land">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="bedroom">Recamaras</label>
                        <input type="number" class="form-control" id="bedroom" name="bedroom">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="complete_bathroom">Baños Completos</label>
                        <input type="number" class="form-control" id="complete_bathroom" name="complete_bathroom">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="half_baths">Medios Baños</label>
                        <input type="number" class="form-control" id="half_baths" name="half_baths">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="garage">Garage</label>
                        <input type="number" class="form-control" id="garage" name="garage">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="map">Mapa</label>
                        <textarea class="form-control" id="map" name="map" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pool">Picina</label>
                        <select class="form-control" id="pool" name="pool">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pool">Asesor</label>
                        <select class="form-control" id="adviser_id" name="adviser_id">
                            @foreach($advisers as $item)
                                <option value="{{ $item->id }}">{{$item->name}}</option>
                            @endforeach
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