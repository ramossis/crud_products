@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del Producto</h2>

        <div class="card">
            <div class="card-body">
                <h3>{{ $product->name }}</h3>
                <strong>
                    {{$product->price}}Bs
                </strong>
                <p>
                    {{$product->description}}
                </p>

                <a href="{{ route('products.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
@endsection