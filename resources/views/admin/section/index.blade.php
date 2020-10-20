@extends('layouts.admin')

@section('admin')

    <h1>Zonas</h1>

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

            <div class="table-responsive my-5">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No. Seccion</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Tamaño Imagen</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th>Seccion {{ $item->id }}</th>
                                <th>{{ $item->title }}</th>
                                <td>{{ $item->size }} px</td>
                                <td>
                                    @if($item->image == null || $item->image == '')
                                        No se ha selecionado una imagen
                                    @else
                                        <img src="{{ asset('sections/'.$item->image) }}" width="100" height="100" class="img-fluid">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('sections-view-title', $item->id) }}" class="btn btn-primary btn-circle btn-sm mb-1" title="Editar Titulo">
                                        <i class="fas fa-pen"></i>
                                    </a>

                                    @if($item->image == null || $item->image == '')
                                        <a href="{{ route('sections-view-add-image', $item->id) }}"  class="btn btn-warning btn-circle btn-sm mb-1" title="Agregar Imagen">
                                            <i class="fas fa-image"></i>
                                        </a>
                                    @endif
                            
                                    <form action="{{ route('sections-remove-image', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-danger btn-circle btn-sm" title="Borrar Imagen">
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
