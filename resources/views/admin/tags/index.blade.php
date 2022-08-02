@extends('adminlte::page')

@section('title', 'Dashboard Admin')

@section('content_header')

    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.tags.create') }}" class="btn btn-secondary">Nueva
        Etiqueta</a>

    <h1>Listar Etiqueta</h1>

@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif


    <div class="card">
        <div class="card-body">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <p style="width: 1rem; height: 1rem; background-color: {{ $tag->color}}; border-radius: 100% " class="mr-2"> </p> 
                                    <p> {{ $tag->color }} </p>
                                </div>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
