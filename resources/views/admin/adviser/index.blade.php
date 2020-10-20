@extends('layouts.admin')

@section('admin')

    <h1>Asesores</h1>

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

            <a href="{{ route('advisers-create-view') }}" class="btn btn-primary btn-large my-3">Crear Registro</a>
            <div class="table-responsive my-5">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Email</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Registros</th>
                            <th scope="col">Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td class="text-center">
                                    @if($item->image == null || $item->image == '')
                                        No se ha selecionado una imagen
                                    @else
                                        <img src="{{ asset('images/'.$item->image) }}" width="100" height="100" class="img-fluid">
                                    @endif
                                </td>
                                <td>

                                    <form action="{{ route('advisers-delete', $item->id) }}" method="POST">
                                    
                                        <a href="{{ route('advisers-update-view', $item->id) }}" class="btn btn-primary btn-circle btn-sm" title="Editar Asesor">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-danger btn-circle btn-sm" title="Borrar Asesor">
                                            <i class="fas fa-user-times"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('advisers-delete-image', $item->id) }}" method="POST">
                                        @if($item->image == null || $item->image == '')
                                            <a href="{{ route('advisers-view-image', $item->id) }}"  class="btn btn-success btn-circle btn-sm" title="Agregar Imagen">
                                                <i class="fas fa-image"></i>
                                            </a>
                                        @endif

                                        @csrf
                                        @method('DELETE')
                                        
                                        @if($item->image != null || $item->image != '')
                                            <button type="submit" class="btn btn-warning btn-circle btn-sm" title="Borrar Imagen" title="Borrar Imagen">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        @endif
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
