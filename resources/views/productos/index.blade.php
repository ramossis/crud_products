@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('products.create')}}" class="btn btn-primary">Nuevo Producto</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Almacen</th>
                    <th>Nombre</th>
                    <th>Sulg</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
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
                            <span>{{ $product->category->name }}</span><br>
                        </td>
                        <td>
                            <span>{{ $product->store->name}}</span><br>
                        </td>
                        <td>
                            <span>{{$product->name}}</span>
                        </td>
                        <td><span>{{$product->sulg}}</span></td>
                        <td><span>{{$product->price}}</span></td>
                        <td><span>{{$product->description}}</span></td>
                        <td>
                            
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Mostrar<i class='bx bx-show'></i></a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar<i class='bx bx-edit-alt' ></i></a>
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
@endsection