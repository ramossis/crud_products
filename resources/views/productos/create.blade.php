@extends('layouts.app')

@section('title')
    Culking | Crear categoría
@stop

@section('content')
<div class="container">
    <div class="d-flex">
        <a href="{{route('products.index')}}" class="me-3"><i class='bx bxs-left-arrow-circle'></i> Atrás</a>
        <h2>Crear Nuevo Producto</h2>
    </div>
    <form method="POST" action="{{ route('products.store') }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @include('productos.field')
        <button type="submit" class="btn btn-primary btn-submit">Crear Producto</button>
    </form>
</div>
@endsection