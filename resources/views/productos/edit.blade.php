@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('products.update',$product->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="category_id" class="col-md-4 col-form-label text-md-end">{{ __('Categoria') }}</label>

                            <div class="col-md-6">
                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id" required>
                                    <option value="">--Seleccione una Categoria--</option>
                                    @foreach ($categories as $val)
                                        <option value="{{$val->id}}">{{$val->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="store_id" class="col-md-4 col-form-label text-md-end">{{ __('Almacen') }}</label>

                            <div class="col-md-6">
                                <select class="form-control @error('store_id') is-invalid @enderror" name="store_id" id="store_id" required>
                                    <option value="">--Seleccione un Almacen--</option>
                                    @foreach ($stores as $val)
                                        <option value="{{$val->id}}">{{$val->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('store_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" value="{{$product->name}}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sulg" class="col-md-4 col-form-label text-md-end">{{ __('Slug') }}</label>

                            <div class="col-md-6">
                                <input id="sulg" type="text" class="form-control @error('sulg') is-invalid @enderror" name="sulg" required autocomplete="slug" value="{{$product->slug}}">

                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" required autocomplete="price" value="{{$product->price}}">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description"value="{{$product->description}}">

                                @error('dscription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
