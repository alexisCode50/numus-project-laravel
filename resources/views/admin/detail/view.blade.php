@extends('layouts.admin')

@section('admin')
    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Vista Previa</h1>

    <a href="{{route('details')}}" class="btn btn-warning btn-icon-split my-3">
        <span class="text">Regresar</span>
    </a>


    <div class="row my-5 justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{!! Session::get('message') !!}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Campo</th>
                            <th scope="col">Informacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Mts construidos</th>
                            <td>{{ $detail->size_property }}</td>
                        </tr>
                        <tr>
                            <th>Area Terreno</th>
                            <td>{{ $detail->size_land }}</td>
                        </tr>
                        <tr>
                            <th>Frente del Terreno</th>
                            <td>{{ $detail->front_land }}</td>
                        </tr>
                        <tr>
                            <th>Fondo del Terreno</th>
                            <td>{{ $detail->back_land }}</td>
                        </tr>
                        <tr>
                            <th>Recamaras</th>
                            <td>{{ $detail->bedroom}}</td>
                        </tr>
                        <tr>
                            <th>Baños Completos</th>
                            <td>{{ $detail->complete_bathroom}}</td>
                        </tr>
                        <tr>
                            <th>Medios Baños</th>
                            <td>{{ $detail->half_baths}}</td>
                        </tr>
                        <tr>
                            <th>Garage</th>
                            <td>{{ $detail->garage }}</td>
                        </tr>
                        <tr>
                            <th>Mapa</th>
                            <td>
                                @if($detail->map != '')
                                    Si
                                @else
                                    No
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Picina</th>
                            <td>
                                @if($detail->pool == 1)
                                    Si
                                @else
                                    No
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="row my-5 justify-content-center">
        <div class="col-md-4">
            @php
                $map =  htmlentities($detail->map);
                echo html_entity_decode($map);
            @endphp
        </div>
    </div>
    
@endsection

