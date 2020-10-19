@extends('layouts.admin')

@section('admin')
    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Editar</h1>

    <a href="{{ route('sections') }}" class="btn btn-warning btn-icon-split my-3">
        <span class="text">Regresar</span>
    </a>

    @if(Session::has('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{!! Session::get('message') !!}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

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
            <form action="{{ route('sections-update-title', $section->id) }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title">Nuevo Titulo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $section->title }}">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>

@endsection

