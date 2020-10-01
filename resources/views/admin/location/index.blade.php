@extends('layouts.admin')

@section('admin')

    <h1>Localizaciones</h1>

    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('location-create') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
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
                            <th scope="col">Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locations as $item)
                            <tr>
                                <th>{{ $item->name }}</th>
                                <td>
                                    <form action="{{ route('location-delete', $item->id) }}" method="POST">
                                        
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
