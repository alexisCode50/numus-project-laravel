@extends('layouts.admin')

@section('admin')

    <h1>Detalles</h1>

    <div class="row">
        <div class="col-md-12">
            @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{!! Session::get('message') !!}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <a href="{{ route('details-create-view') }}" class="btn btn-primary btn-large my-3">Crear Registro</a>
            <div class="table-responsive my-5">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Clave de Propiedad</th>
                            <th scope="col">Mts Construidos</th>
                            <th scope="col">Mts Terreno</th>
                            <th scope="col">Recamaras</th>
                            <th scope="col">Baños Completos</th>
                            <th scope="col">Medios Baños</th>
                            <th scope="col">Garage</th>
                            <th scope="col">Mapa</th>
                            <th scope="col">Picina</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th>{{ $item->unique_key_property }}</th>
                                <th>{{ $item->size_property }}</th>
                                <td>{{ $item->size_land }}</td>
                                <td>{{ $item->bedroom }}</td>
                                <td>{{ $item->complete_bathroom }}</td>
                                <td>{{ $item->half_baths }}</td>
                                <td>{{ $item->garage }}</td>
                                <td>
                                    @if($item->map != '')
                                        Si
                                    @else
                                        No
                                    @endif
                                </td>
                                <td>
                                    @if($item->pool == 1)
                                        Si
                                    @else
                                        No
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('details-delete', $item->id) }}" method="POST">
                            
                                        <a href="{{ route('details-update-view', $item->id) }}" class="btn btn-primary btn-circle btn-sm mb-1">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <a href="{{ route('details-view', $item->id) }}"  class="btn btn-warning btn-circle btn-sm mb-1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
