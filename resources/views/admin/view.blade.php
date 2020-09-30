@extends('layouts.admin')

@section('admin')
    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Detalles de la Propiedad</h1>

    <a href="/admin" class="btn btn-warning btn-icon-split my-3">
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
                            <th>Nombre</th>
                            <td>{{ $property->title }}</td>
                        </tr>
                        <tr>
                            <th>Direccion</th>
                            <td>{{ $property->direction}}</td>
                        </tr>
                        <tr>
                            <th>Ubicacion</th>
                            <td>{{ $property->location}}</td>
                        </tr>
                        <tr>
                            <th>Tipo de Propiedad</th>
                            <td>{{ $property->type_property}}</td>
                        </tr>
                        <tr>
                            <th>Precio</th>
                            <td>{{ $property->price}}</td>
                        </tr>
                        <tr>
                            <th>Estado</th>
                            <td>{{ $property->state_property }}</td>
                        </tr>
                        <tr>
                            <th>Dimenciones</th>
                            <td>{{ $property->size_property}}</td>
                        </tr>
                        <tr>
                            <th>Cuartos</th>
                            <td>{{ $property->bedroom}}</td>
                        </tr>
                        <tr>
                            <th>Baños</th>
                            <td>{{ $property->bathroom}}</td>
                        </tr>
                        <tr>
                            <th>Garage</th>
                            <td>{{ $property->garage }}</td>
                        </tr>
                        <tr>
                            <th>Latitud</th>
                            <td>{{ $property->latitude_map}}</td>
                        </tr>
                        <tr>
                            <th>Longitud</th>
                            <td>{{ $property->longitude_map}}</td>
                        </tr>
                        <tr>
                            <th>Amenidades</th>
                            <td>{{ $property->amenities }}</td>
                        </tr>
                        <tr>
                            <th>Descripcion</th>
                            <td>{{ $property->description }}</td>
                        </tr>
                        <tr>
                            <th>Imagen de Perfil</th>
                            <td>
                                @if($property->profile_picture == '')
                                    No se ha selecionado una foto de perfil
                                @else
                                <img src="{{ asset('images/'.$property->profile_picture) }}" width="100" height="100" class="img-fluid" alt="">
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <div class="row my-5 justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('image-add', $property->id) }}"  class="btn btn-success mb-2">
                Agregar Imagenes  <i class="fas fa-image"></i>
            </a>
            @if (count($images) > 0)
                <div class="row my-5 justify-content-center">
                    <div class="col-md-8">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Opcion</th>
                                    </tr>
                                </thead>
                                @foreach($images as $img)
                                    <tbody>
                                        <td>
                                            <img src="{{ asset('images/'.$img->route_img) }}" width="200" height="200" class="img-fluid" alt="">
                                        </td>
                                        <td>
                                            <form action="{{ route('image-delete', $img->id) }}" method="POST">
                            
                                                <a href="{{ route('image-profile', $img->id) }}" class="btn btn-primary mb-2">
                                                    Establecer como foto de perfil
                                                </a>
                                                
                                                @csrf
                                                @method('DELETE')
                                
                                                <button type="submit" class="btn btn-danger">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="mx-auto">
                    <h3>No hay imagenes</h3>
                </div>
            @endif
        </div>
    </div>

    <div class="row my-5 justify-content-center">
        {{ $images->links() }}
    </div>
    

@endsection

