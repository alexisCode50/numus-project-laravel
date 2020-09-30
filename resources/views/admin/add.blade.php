@extends('layouts.admin')

@section('admin')
    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Agregar Imagenes a la Propiedad</h1>

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
            <form action="{{ route('image-save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="hidden" name="id" value="1">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image[]" id="image" multiple>
                        <label class="custom-file-label">Elige Una Imagen</label>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>

@endsection

