@extends('layouts.admin')

@section('admin')
    <!-- Page Heading -->
    <h1 class="h1 mb-2 text-gray-800">Editar Asesor</h1>

    <a href="{{route('advisers')}}" class="btn btn-warning btn-icon-split my-3">
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
            <form action="{{ route('advisers-update', $adviser->id) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">Nombre Completo</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $adviser->name }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Numero de Telefono</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="{{ $adviser->phone }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Correo Electronico</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $adviser->email }}">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success btn-icon-split my-3">
                    <span class="text">Guardar</span>
                </button>
            </form>
        </div>
    </div>

@endsection