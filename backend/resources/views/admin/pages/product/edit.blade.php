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
            <form action="{{route('admin.product.update', ['product' => $product->id])}}" method="post"
                id="formUpdateProduct" enctype="multipart/form-data">
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
                                                <option value="0" {{$product->status == 0 ? "selected" : ""}}>
                                                    Desativo
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
                                                    {{$product->tag_id == $tag->id ? "selected" : ""}}>
                                                    {{$tag->name}}
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
                                                class="form-control {{$errors->has('meta_description') ? 'is-invalid' : ''}}"
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
                @if($product->use_subproduct == 0)
                <div class="product-data">
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
                                                        name="price" id="price"
                                                        value="{{old('price', convertMoneyUsaToBrazil($product->price))}}">
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
                                                        value="{{old('promotional_price', convertMoneyUsaToBrazil($product->promotional_price))}}">
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
                                                        value="{{old('weight', convertMoneyUsaToBrazil($product->weight))}}">
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
                                                        name="depth" id="depth"
                                                        value="{{old('depth', convertMoneyUsaToBrazil($product->depth))}}">
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
                                                        name="width" id="width"
                                                        value="{{old('width', convertMoneyUsaToBrazil($product->width))}}">
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
                                                        value="{{old('height', convertMoneyUsaToBrazil($product->height))}}">
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
                                                <input type="checkbox" class="form-check-input"
                                                    id="input-has_free_shipping" value="1"
                                                    {{$product->has_free_shipping != null ? 'checked' : ''}}
                                                    name="has_free_shipping">
                                                <label class="form-check-label" for="input-has_free_shipping">Esse
                                                    produto
                                                    possui frete grátis</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline card-info">
                            <div class="card-body p-3">
                                <table class="table table-bordered table-striped"">
                                    <tbody>
                                    <tr>
                                        <td>Utilizando variações.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class=" row">
                                    <div class="col-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Categorias</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <?php
                                    $countCategories = count($categories);
                                    $firstColQty = (int)($countCategories / 2);
                                    $i = 0;

                                    ?>
                                                    <div class="col-md-6">
                                                        @forelse($categories as $category)
                                                        <div class="form-group form-group-category">
                                                            <div class="checkbox">
                                                                <label class="main-category">
                                                                    <input type="checkbox" name="category"
                                                                        @if(in_array($category->id,
                                                                    $categoriesId)) checked @endif
                                                                    class="checkbox-category"
                                                                    value="{{$category->id}}">
                                                                    {{$category->name}}@if(count($category->categories)
                                                                    > 0)
                                                                    <small>*</small>
                                                                    @endif
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @component('admin.components.categories',['category' =>
                                                        $category,
                                                        'categoriesId' => $categoriesId])
                                                        @endcomponent

                                                        <?php $i++; ?>

                                                        @if($i == $firstColQty)
                                                    </div>
                                                    <div class="col-md-6">
                                                        @endif

                                                        @empty
                                                        <p>Nenhuma categoria cadastrada</p>
                                                        @endforelse
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
                                            <div class="card-tools">
                                                <div class="btn-group btn-group-sm">

                                                    <button type="button" class="btn btn-primary btnChange btn-sm"
                                                        title="Utilizar Variação">
                                                        <i
                                                            class="fas fa-toggle-{{$product->use_subproduct == 1 ? 'on' : 'off'}}"></i>
                                                    </button>
                                                    @if($product->use_subproduct == 1)
                                                    <button type="button" class="btn btn-success btn-sm"
                                                        id="btnAddVariation">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <table class="table table-bordered table-striped"">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th class=" text-right">Ações</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($product->variations as $variation)
                                                    <tr>
                                                        <td>{{$variation->name}}</td>
                                                        <td class="text-center align-middle py-0">
                                                            <div class="btn-group btn-group-sm">
                                                                <button type="button"
                                                                    href="{{route('admin.product.variation.delete', ['product' => $product,'variation' => $variation])}}"
                                                                    class="btn btn-danger btn-delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="5">Nenhum variação cadastrada</td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Subprodutos</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-success btn-sm"
                                                    id="btnAddSubproduct">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Foto</th>
                                                        <th>Variação</th>
                                                        <th>Estoque</th>
                                                        <th>Preço</th>
                                                        <th>Peso</th>
                                                        <th class=" text-right">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($product->products as $subproduct)
                                                    <tr>
                                                        <td class="text-center align-middle py-2">
                                                            @if($subproduct->product_image_id == null)
                                                            <img class="photo" data-id="{{$subproduct->id}}"
                                                                src="{{asset('img/no-photo-50.png')}}" alt="Sem imagem"
                                                                width="50">
                                                            @else
                                                            <img class="photo" data-id="{{$subproduct->id}}"
                                                                src="{{ asset('uploads/products/thumbnail')}}/{{$subproduct->image->file}}"
                                                                alt="Sem imagem" width="50">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @foreach($subproduct->variationOptions as $option)
                                                            <small>{{$option->name}}</small><br>
                                                            @endforeach
                                                        </td>
                                                        <td> @if($subproduct->stock == null)&infin; @else
                                                            $subproduct->stock @endif
                                                        </td>
                                                        <td>R$ {!!convertMoneyUSAToBrazil($subproduct->price)!!}</td>
                                                        <td>{{convertMoneyUSAToBrazil($subproduct->weight)}} Kg</td>
                                                        <td class="text-center align-middle py-0">
                                                            <div class="btn-group btn-group-sm">
                                                                <a href="#" class="btn btn-info">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <button onclick="deleteItem(this, 1)"
                                                                    data-href="{{route('admin.product.delete', ['product' => $subproduct])}}"
                                                                    class="btn btn-danger act-delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="5">Nenhum subproduto cadastrado</td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
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
$('.btnChange').on('click', function(e) {
    e.preventDefault();
    axios.post(`{{route('admin.product.variation.change', ['product' => $product])}}`)
        .then(function(response) {
            document.location.reload(true);
        })
        .catch(function(error) {
            console.log(error);
        });
});

function imageDelete(file) {
    $('#confirmationModal .modal-title').html('Confirmação');
    $('#confirmationModal .modal-body p').html('Tem certeza que deseja realizar esta exclusão?');
    var href = $(this).attr('href');
    $('#confirmationModal form').attr('action',"{{ url('admin/catalogo/produtos/image/delete')}}/" + file);
    $('#confirmationModal').modal('show');
}
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

$('.photo').on('click', function(e) {
    e.preventDefault();
    let id = $(this).data('id');
    $('#subproduct_id').val(id);
    $('#imagesModal').modal('show');
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

$('#btnAddVariation').on('click', function(e) {
    e.preventDefault();
    $('#modalAddVariation').modal('show');
});

$('#btnAddSubproduct').on('click', function(e) {
    e.preventDefault();
    $('#modalAddSubProduct').modal('show');
});


const getVariations = async () => {
    return await axios.get(`{{route('api.variation.index')}}`)
        .then(response => {
            return response.data;
        })
        .catch(error => console.log(error));
}
const getVariationOptions = async (variationId) => {
    let url = `{{route('api.variation.show', ['variation' => 'variationValue'])}}`;
    url = url.replace('variationValue', variationId);
    return await axios.get(url)
        .then(response => {
            return response.data;
        })
        .catch(error => console.log(error));
}

window.onload = async () => {
    let variations = await getVariations();
    let selectVariations = document.querySelector('#select-variation');

    await createOptions(variations.data, selectVariations);
}

$('#select-variation').on('change', function() {
    requestSend($(this).val());
});

$('.select2').select2();


const requestSend = async (optionId) => {
    let variation = await getVariationOptions(optionId);
    let selectOption = document.querySelector('#select-variation-option');
    createOptions(variation.options, selectOption);
}
$(document).on('click', '.new-variation-btn', function() {
    let html = `{{view('admin.components.variation')}}`;
    $(html).insertBefore(this);
});

$("#btnUpdateProduct").on('click', function(e) {
    e.preventDefault();
    $("#formUpdateProduct").submit();
});


$(document).ready(function() {
    inspectChecked();
});

$('.checkbox-category').change(function() {
    var categoryId = $(this).val();
    var productId = "{{$product->id}}";
    let url =
        "{{route('admin.product.category.change',['product' => 'productValue', 'category' => 'categoryValue'])}}";
    url = url.replace('productValue', productId);
    url = url.replace('categoryValue', categoryId);
    $.get(url, function() {});

    if (!$(this).is(':checked')) {
        changeIsChecked(categoryId);
    } else {
        changeIsNotChecked(categoryId);
    }
});

const inspectChecked = () => {
    $('.main-category input').each(function() {
        let id = $(this).val();
        let isChecked = $(this).is(':checked');
        loadCheckeds(id, isChecked);
    });
}

const loadCheckeds = (categoryId, isChecked) => {
    let categoryDiv = $('#box-category-' + categoryId + ' input');
    if (categoryDiv.length == 0) {
        return;
    }
    if (!isChecked) {
        $('#box-category-' + categoryId).addClass('no-checked');
    } else {
        $('#box-category-' + categoryId).removeClass('no-checked');
    }
    categoryDiv.each(function() {
        loadCheckeds($(this).val(), $(this).is(':checked'));
    });
}

const changeIsChecked = (categoryId) => {
    let categoryDiv = $('#box-category-' + categoryId + ' input');
    if (categoryDiv.length == 0) {
        return;
    }
    $('#box-category-' + categoryId).addClass('no-checked');

    categoryDiv.prop("checked", false);
    if (!categoryDiv.is(':checked')) {
        categoryDiv.each(function() {
            changeIsChecked($(this).val());
        });
    }

}

const changeIsNotChecked = (categoryId) => {
    let categoryDiv = $('#box-category-' + categoryId + ' input');
    if (categoryDiv.length == 0) {
        return;
    }
    $('#box-category-' + categoryId).removeClass('no-checked');
    categoryDiv.prop("checked", true);
    if (categoryDiv.is(':checked')) {
        categoryDiv.each(function() {
            changeIsNotChecked($(this).val());
        });
    }

}
</script>
@endsection
@section('modals')
<div class="modal fade" id="modalAddVariation" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Variáveis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.product.variation.store', ['product' => $product])}}" method="post"
                autocomplete="off" class="form-horizontal">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="select-variation">Variações disponíveis</label>
                                <select class="select2" class="select2" multiple="multiple"
                                    data-placeholder="Selecione as variações" name="variation_id[]"
                                    id="select-variation">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-info">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="imagesModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Selecione uma imagem para</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.product.subproduct.image.store', ['product' => $product])}}" method="post"
                autocomplete="off" class="form-horizontal">
                @csrf

                <input type="hidden" name="subproduct_id" id="subproduct_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label>Imagens do produto</label>
                            <div class="row">
                                <?php
                                $numOfCols = 4;
                                $rowCount = 0;
                                $bootstrapColWidth = 12 / $numOfCols;
                                ?>
                                @forelse($product->images as $image)
                                <div class="col-sm-<?= $bootstrapColWidth; ?>">
                                    <input id="product-image-{{$image->id}}" class="input-subproduct-image" type="radio"
                                        name="image_id" value="{{$image->id}}">
                                    <label for="product-image-{{$image->id}}" class="option-subproduct-image">
                                        <img src="{{ asset('uploads/products/thumbnail')}}/{{$image->file}}">
                                    </label>
                                </div>
                                <?php
                                $rowCount++;
                                if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
                                ?>
                                @empty
                                <div class="col-sm-12">
                                    <p>Ainda nenhuma imagem foi cadastrada</p>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-info">Selecionar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modalAddSubProduct" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Subproduto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.product.subproduct.store', ['product' => $product])}}" method="post"
                autocomplete="off" class="form-horizontal">
                @csrf
                <div class="modal-body">
                    @foreach($product->variations as $variation)
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>{{$variation->name}}</label>
                                <select name="variaton_option_id[]" class="form-control">
                                    @foreach($variation->options as $option)
                                    <option value="{{$option->id}}">{{$option->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-info">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection