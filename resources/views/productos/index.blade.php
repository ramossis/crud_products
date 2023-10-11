@extends('layouts.app')

@section('title')
    Culking | Categoría
@stop

@section('content')
    <div class="container">
        <div class="p-4 rounded">
            <form class="row" action="{{route('products.index')}}" method="GET">
                @csrf
                <div class="col-md-4">
                    <h3>Listado de Productos</h3>
                </div>

                <div class="col-md-8">
                    <div class="input-group ">
                        <input type="search" name="search" value="{!!old('search', $search ?? '')!!}" class="form-control" placeholder="Buscar noticias...">
                        <button class="btn btn-dark btn-sm"> <i class='bx bx-search-alt-2'></i> Buscar</button>
                    </div>
                </div>

            </form>
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right">Crear Nueva Producto</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Almacen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                <span>{{ $product->category_id }}</span><br>
                            </td>
                            <td>
                                <span>{{$product->store_id}}</span>
                            </td>
                            <td>
                                <span>{{$product->name}}</span>
                                <small class="text-secondary">{{ $product->slug }}</small>
                            </td>
                            <td>
                                <span>{{$product->price}}</span>
                            </td>
                            <td>
                                {{$product->description}}
                            </td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Ver<i class='bx bx-show'></i></a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Modificar<i class='bx bx-edit-alt' ></i></a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-submit" onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">Eliminar<i class='bx bx-trash' ></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
@section('css')

@stop

@section('js')

@stop