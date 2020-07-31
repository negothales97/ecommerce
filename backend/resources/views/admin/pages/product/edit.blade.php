@extends('admin.templates.default', ['activePage' => 'product', 'titlePage' => __('Produtos')])

@section('title', 'Editar Produto')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-1 text-dark">Editar Produto</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Imagens produto</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-success btn-sm" onclick="$('#images').click();">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="images" method="POST" action="{{ route('admin.product.image.store')}}"
                                class="dropzone"></form>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{route('admin.product.edit', ['product' => $product->id])}}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Dados do produto</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status"
                                                class="form-control {{$errors->has('status') ? 'is-invalid' : ''}}">
                                                <option value="1" {{$product->status == 1 ? "selected" : ""}}>Ativo
                                                </option>
                                                <option value="0" {{$product->status == 0 ? "selected" : ""}}>Desativo
                                                </option>
                                            </select>
                                            @if ($errors->has('status'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="tag_id">Tag</label>
                                            <select name="tag_id" id="tag_id"
                                                class="form-control {{$errors->has('tag_id') ? 'is-invalid' : ''}}">
                                                <option disabled selected>Selecione...</option>
                                                @foreach($tags as $tag)
                                                <option value="{{$tag->id}}"
                                                    {{$product->tag_id == $tag->id ? "selected" : ""}}>{{$tag->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('tag_id'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('tag_id') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                                name="name" id="name" value="{{old('name', $product->name)}}">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="slug">URL do produto</label>
                                            <input type="text"
                                                class="form-control input-slug {{$errors->has('slug') ? 'is-invalid' : ''}}"
                                                name="slug" id="slug" value="{{old('slug', $product->slug)}}">
                                            @if ($errors->has('slug'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Descrição</label>
                                            <textarea name="description" id="input-description"
                                                class="form-control textarea {{$errors->has('description') ? 'is-invalid' : ''}}"
                                                required
                                                rows="5">{{old('description', $product->description)}}</textarea>
                                            @if ($errors->has('description'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('content_pt_BR') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="meta_title">Título para SEO</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('meta_title') ? 'is-invalid' : ''}}"
                                                name="meta_title" id="meta_title"
                                                value="{{old('meta_title', $product->meta_title)}}">
                                            @if ($errors->has('meta_title'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('meta_title') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="meta_description">Descrição para SEO</label>
                                            <textarea name="meta_description" id="input-meta_description"
                                                class="form-control textarea {{$errors->has('meta_description') ? 'is-invalid' : ''}}"
                                                required
                                                rows="5">{{old('meta_description', $product->meta_description)}}</textarea>
                                            @if ($errors->has('meta_description'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('meta_description') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- ./col -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Preços</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="price">Preço Original</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">R$</span>
                                                </div>
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('price') ? 'is-invalid' : ''}}"
                                                    name="price" id="price" value="{{old('price', $product->price)}}">
                                            </div>
                                            @if ($errors->has('price'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="promotional_price">Preço Promocional</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">R$</span>
                                                </div>
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('promotional_price') ? 'is-invalid' : ''}}"
                                                    name="promotional_price" id="promotional_price"
                                                    value="{{old('promotional_price', $product->promotional_price)}}">
                                            </div>
                                            @if ($errors->has('promotional_price'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('promotional_price') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Gestão</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="stock">Estoque</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('stock') ? 'is-invalid' : ''}}"
                                                name="stock" id="stock" value="{{old('stock', $product->stock)}}">
                                            @if ($errors->has('stock'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('stock') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="sku">SKU</label>

                                            <input type="text"
                                                class="form-control {{$errors->has('sku') ? 'is-invalid' : ''}}"
                                                name="sku" id="sku" value="{{old('sku', $product->sku)}}">
                                            @if ($errors->has('sku'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('sku') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="barcode">Código de barras (GTIN, EAN, ISBN, etc.)</label>

                                            <input type="text"
                                                class="form-control {{$errors->has('barcode') ? 'is-invalid' : ''}}"
                                                name="barcode" id="barcode"
                                                value="{{old('barcode', $product->barcode)}}">
                                            @if ($errors->has('barcode'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('barcode') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Peso e dimensões</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="weight">Peso</label>
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('weight') ? 'is-invalid' : ''}}"
                                                    name="weight" id="weight"
                                                    value="{{old('weight', $product->weight)}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">kg</span>
                                                </div>
                                            </div>
                                            @if ($errors->has('weight'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('weight') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="depth">Comprimento</label>
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('depth') ? 'is-invalid' : ''}}"
                                                    name="depth" id="depth" value="{{old('depth', $product->depth)}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">cm</span>
                                                </div>
                                            </div>
                                            @if ($errors->has('depth'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('depth') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="width">Largura</label>
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('width') ? 'is-invalid' : ''}}"
                                                    name="width" id="width" value="{{old('width', $product->width)}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">cm</span>
                                                </div>
                                            </div>
                                            @if ($errors->has('width'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('width') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="height">Altura</label>
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('height') ? 'is-invalid' : ''}}"
                                                    name="height" id="height"
                                                    value="{{old('height', $product->height)}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">cm</span>
                                                </div>
                                            </div>
                                            @if ($errors->has('height'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('height') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">Frete Grátis</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="input-has_free_shipping"
                                                value="{{$product->has_free_shipping != null ? 'checked' : ''}}"
                                                name="has_free_shipping">
                                            <label class="form-check-label" for="input-has_free_shipping">Esse produto
                                                possui frete grátis</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">Variações</h3>
                                <!-- <span class="description">Exemplos de variações são: cores e tamanhos</span> -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="input-has_free_shipping"
                                                value="{{$product->has_free_shipping != null ? 'checked' : ''}}"
                                                name="has_free_shipping">
                                            <label class="form-check-label" for="input-has_free_shipping">Esse produto
                                                possui frete grátis</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('scripts')
<script type="text/javascript">
// Dropzone

Dropzone.options.images = {
    addRemoveLinks: true,
    removedfile: function(file) {
        imageDelete(file.name);
        return false;
    },
    maxFilesize: 10,
    init: function() {
        thisDropzone = this;

        thisDropzone.on("sending", function(file, xhr, formData) {
            formData.append("_token", "{{ csrf_token() }}");
            formData.append("product_id", "{{$product->id}}");
        });

        $.get("{{ route('admin.product.image.list', ['id' => $product->id])}}", function(data) {

            i = 0;

            $.each(JSON.parse(data), function(key, value) {

                var mockFile = {
                    name: value.name,
                    size: value.size,
                    dataURL: "{{ asset('uploads/products/thumbnail')}}/" + value.name
                };
                thisDropzone.files.push(mockFile);
                thisDropzone.emit('addedfile', mockFile);
                thisDropzone.createThumbnailFromUrl(mockFile,
                    thisDropzone.options.thumbnailWidth, thisDropzone.options
                    .thumbnailHeight,
                    thisDropzone.options.thumbnailMethod, true,
                    function(thumbnail) {
                        thisDropzone.emit('thumbnail', mockFile, thumbnail);
                    });

                mockFile.previewElement.dataset.file = value.name;

                /*if(value.color){
                  $(mockFile.previewElement).find('.dz-remove').remove();
                } */

                if (i == 0) {
                    $(mockFile.previewElement).prepend(
                        '<div id="etiqueta-imagem-principal">Principal</div>');
                    $(mockFile.previewElement).addClass('imagem-principal');
                } else {
                    $(mockFile.previewElement).find('#etiqueta-imagem-principal').remove();
                    $(mockFile.previewElement).removeClass('imagem-principal');
                }

                i++;

                thisDropzone.emit('complete', mockFile);

            });

        });
    },
    success: function(file, response) {
        file.previewElement.dataset.file = response.filename;
        sortImagens();
    }
};

$("#images").sortable({
    items: '.dz-preview',
    cursor: 'move',
    opacity: 0.5,
    containment: "parent",
    distance: 20,
    tolerance: 'pointer',
    update: function(e, ui) {
        sortImagens();
    }
});

function sortImagens() {
    var i = 0;
    var files = [];

    $('.dz-preview').each(function() {
        $(this).data('file');
        files.push($(this).data('file'));
        if (i == 0) {
            $(this).prepend('<div id="etiqueta-imagem-principal">Principal</div>');
            $(this).addClass('imagem-principal');
        } else {
            $(this).find('#etiqueta-imagem-principal').remove();
            $(this).removeClass('imagem-principal');
        }
        i++;
    });

    $.ajax({
        type: 'POST',
        url: "{{ route('admin.product.image.sort')}}",
        data: {
            'files': files,
            '_token': "{{csrf_token()}}",
        },
        beforeSend: function() {
            //
        },
        success: function(data) {
            console.log(files);
        }
    });
}
</script>
@endsection