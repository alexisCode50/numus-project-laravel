@extends('layouts.admin')

@section('admin')

    <h1>Dashboard</h1>

    <div class="row">
        <div class="col-md-12">
            <a href="admin/properties/create/view" class="btn btn-primary btn-large mb-3">Registrar Propiedad</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Direcion</th>
                            <th scope="col">Localizacion</th>
                            <th scope="col">Tipo de Propiedad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Dimenciones</th>
                            <th scope="col">Cuartos</th>
                            <th scope="col">Baños</th>
                            <th scope="col">Garage</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th>{{ $item->title }}</th>
                                <td>{{ $item->direction }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->type_property }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->state_property }}</td>
                                <td>{{ $item->size_property }}</td>
                                <td>{{ $item->bedroom }}</td>
                                <td>{{ $item->bathroom }}</td>
                                <td>{{ $item->garage }}</td>
                                <td>
                                    <form action="{{ route('properties-delete', $item->id) }}" method="POST">
                            
                                        <a href="{{ route('properties-update-view', $item->id) }}" class="btn btn-primary btn-circle btn-sm mb-1">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <a href="{{ route('image-add', $item->id) }}"  class="btn btn-success btn-circle btn-sm mb-1">
                                            <i class="fas fa-image"></i>
                                        </a>

                                        <a href="{{ route('image-add', $item->id) }}"  class="btn btn-warning btn-circle btn-sm mb-1">
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
