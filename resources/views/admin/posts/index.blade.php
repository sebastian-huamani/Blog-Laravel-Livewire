@extends('adminlte::page')

@section('title', 'Dashboard Admin')

@section('content_header')

    <a href="{{route('admin.posts.create')}}" class="float-right btn btn-secondary btn-sm">Nuevo Post</a>
    <h1>Listar de Post</h1>

    @livewire('admin.post-index')

@stop

@section('content')


@stop
