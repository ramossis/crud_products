<div class="row form-group">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="category_id" class="form-label">Catgeoria:</label><b class="text-danger"> *</b>

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
            <label for="store_id" class="form-label">Almacen</label><b class="text-danger"> *</b>
            <div class="col-md-6">
                <select class="form-control @error('category_id') is-invalid @enderror" name="store_id" id="store_id" required>
                    <option value="">--Seleccione un Almacen--</option>
                    @foreach ($stores as $val)
                        <option value="{{$val->id}}">{{$val->nombre}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--
                <input type="text" class="form-control" id="title" name="title"
                value="{{ old('title', $category->title ?? '') }}">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror

             <div class="col-md-6 mb-3">
            <label for="color" class="form-label">Color:</label>
            <input type="color" class="form-control" id="color" name="color"
                value="{{ old('color', $category->color ?? '#ff0000') }}">
            @error('color')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

          <input type="file" accept="image/*" name="icon" onchange="previewImage(event, '#imgPreview')">
            <img class="mt-3" id="imgPreview" src="{!! old(
                'icon',
                $category->icon ??
                    'https://e7.pngegg.com/pngimages/854/638/png-clipart-computer-icons-preview-batch-miscellaneous-angle-thumbnail.png',
            ) !!}" height="100" width="100">
            @error('icon')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            -->
        </div>
       
    </div>

    <div class="row">
        <div class="col-md-3 text-center">
            <label for="name" class="form-label">Nombre:</label><b class="text-danger"> *</b>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="col-md-6 text-center">
            <label for="price" class="form-label">Precio:</label><b class="text-danger"> *</b>
            <input type="number" class="form-control" id="price" name="price">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="col-md-12 text-center">
            <label for="description" class="form-label">Descripcion:</label><b class="text-danger"> *</b>
            <textarea class="form-control" id="description" name="description" rows="8" placeholder="Descripcion"></textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>
    </div>
</div>