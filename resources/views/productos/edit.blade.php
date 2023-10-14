@extends('layouts.app')

@section('title')
    Culking | Editar categoría
@stop
@section('menu')
    @include('layouts.menu')
@endsection
@section('content')
<div class="container">
    <div class="d-flex">
        <a href="{{route('products.index')}}" class="me-3"><i class='bx bxs-left-arrow-circle'></i> Atrás</a>
        <h2>Editar Categoría</h2>
    </div>
    @include('layouts.alerts')
    <form method="POST" action="{{ route('products.update', $product->id) }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('productos.field')
        <button type="submit" class="btn btn-primary btn-submit">Guardar Cambios</button>
    </form>
</div>
@endsection
@section('css')

@stop
