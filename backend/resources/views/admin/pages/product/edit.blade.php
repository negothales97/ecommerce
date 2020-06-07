@extends('admin.templates.default', ['activePage' => 'product', 'titlePage' => __('Produtos')])
@section('content')
<div class="content">
    <nav class="navbar sticky-top navbar-light bg-default">
        <div class="container">
            <button type="submit" class="btn btn-default btn-link"><i
                    class="material-icons">delete_outline</i>{{ __('Apagar') }}</button>
            <button type="submit" class="btn btn-info" id="save">{{ __('Salvar Alterações') }}</button>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @csrf
                @method('put')
                <form id="images" method="POST" action="{{route('admin.product.image.store', ['product' => $product])}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">{{ __('Imagens Produto') }}</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                @foreach($product->images as $image)
                                <div class="col-sm-3 ">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{asset('uploads/products/thumbnail/')}}/{{$image->file}}"
                                            class="product-img mx-auto">
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-sm-3">
                                    <div class="d-flex justify-content-center">
                                        <label for="input-file" id="label-file">
                                            <i class="material-icons">camera_alt</i>
                                        </label>
                                        <input type="file" name="file" id="input-file" multiple class="display-none">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-info">{{ __('Salvar') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <form method="post" action="{{ route('admin.product.update', ['product' => $product]) }}" autocomplete="off"
            id="formUpdate" class="form-horizontal">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">{{ __('Editar Produto') }}</h4>
                            <p class="card-category">{{ __('Dados do produto') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Nome') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" id="input-name" type="text" placeholder="{{ __('Nome') }}"
                                            value="{{ old('name', $product->name) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Descrição') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <input
                                            class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                            name="description" id="input-description" type="text"
                                            placeholder="{{ __('Descrição') }}"
                                            value="{{ old('description', $product->description) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('description'))
                                        <span id="description-error" class="error text-danger"
                                            for="input-description">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('URL do produto') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('slug') ? ' has-danger' : '' }}">
                                        <input
                                            class="input-slug form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                                            name="slug" id="input-slug" type="text"
                                            placeholder="{{ __('URL do produto') }}"
                                            value="{{ old('slug', $product->slug) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('slug'))
                                        <span id="slug-error" class="error text-danger"
                                            for="input-slug">{{ $errors->first('slug') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Título para SEO') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('meta_title') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('meta_title') ? ' is-invalid' : '' }}"
                                            name="meta_title" id="input-meta_title" type="text"
                                            placeholder="{{ __('Título para SEO') }}"
                                            value="{{ old('meta_title', $product->meta_title) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('meta_title'))
                                        <span id="meta_title-error" class="error text-danger"
                                            for="input-meta_title">{{ $errors->first('meta_title') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Descrição para SEO') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('meta_description') ? ' has-danger' : '' }}">
                                        <input
                                            class="form-control{{ $errors->has('meta_description') ? ' is-invalid' : '' }}"
                                            name="meta_description" id="input-meta_description" type="text"
                                            placeholder="{{ __('Descrição para SEO') }}"
                                            value="{{ old('meta_description', $product->meta_description) }}"
                                            required="true" aria-required="true" />
                                        @if ($errors->has('meta_description'))
                                        <span id="meta_description-error" class="error text-danger"
                                            for="input-meta_description">{{ $errors->first('meta_description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">{{ __('Preços') }}</h4>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                        <input
                                            class="input-money form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                            name="price" id="input-price" type="text"
                                            placeholder="{{ __('Preço Original') }}"
                                            value="{{ old('price', $product->price) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('price'))
                                        <span id="price-error" class="error text-danger"
                                            for="input-price">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group{{ $errors->has('promotional_price') ? ' has-danger' : '' }}">
                                        <input
                                            class="input-money form-control{{ $errors->has('promotional_price') ? ' is-invalid' : '' }}"
                                            name="promotional_price" id="input-promotional_price" type="text"
                                            placeholder="{{ __('Preço Promocional') }}"
                                            value="{{ old('promotional_price', $product->promotional_price) }}"
                                            required="true" aria-required="true" />
                                        @if ($errors->has('promotional_price'))
                                        <span id="promotional_price-error" class="error text-danger"
                                            for="input-promotional_price">{{ $errors->first('promotional_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">{{ __('Gestão') }}</h4>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group{{ $errors->has('stock') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                                            name="stock" id="input-stock" type="text" placeholder="{{ __('Estoque') }}"
                                            value="{{ old('stock', $product->stock) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('stock'))
                                        <span id="stock-error" class="error text-danger"
                                            for="input-stock">{{ $errors->first('stock') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group{{ $errors->has('sku') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('sku') ? ' is-invalid' : '' }}"
                                            name="sku" id="input-sku" type="text" placeholder="{{ __('SKU') }}"
                                            value="{{ old('sku', $product->sku) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('sku'))
                                        <span id="sku-error" class="error text-danger"
                                            for="input-sku">{{ $errors->first('sku') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group{{ $errors->has('barcode') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('barcode') ? ' is-invalid' : '' }}"
                                            name="barcode" id="input-barcode" type="text"
                                            placeholder="{{ __('Código de barras (GTIN, EAN, ISBN, etc.)') }}"
                                            value="{{ old('barcode', $product->barcode) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('barcode'))
                                        <span id="barcode-error" class="error text-danger"
                                            for="input-barcode">{{ $errors->first('barcode') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">{{ __('Peso e Dimensões') }}</h4>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group{{ $errors->has('weight') ? ' has-danger' : '' }}">
                                        <input
                                            class="input-money form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}"
                                            name="weight" id="input-weight" type="text" placeholder="{{ __('Peso') }}"
                                            value="{{ old('weight', $product->weight) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('weight'))
                                        <span id="weight-error" class="error text-danger"
                                            for="input-weight">{{ $errors->first('weight') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group{{ $errors->has('depth') ? ' has-danger' : '' }}">
                                        <input
                                            class="input-money form-control{{ $errors->has('depth') ? ' is-invalid' : '' }}"
                                            name="depth" id="input-depth" type="text"
                                            placeholder="{{ __('Comprimento') }}"
                                            value="{{ old('depth', $product->depth) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('depth'))
                                        <span id="depth-error" class="error text-danger"
                                            for="input-depth">{{ $errors->first('depth') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group{{ $errors->has('width') ? ' has-danger' : '' }}">
                                        <input
                                            class="input-money form-control{{ $errors->has('width') ? ' is-invalid' : '' }}"
                                            name="width" id="input-width" type="text" placeholder="{{ __('Largura') }}"
                                            value="{{ old('width', $product->width) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('width'))
                                        <span id="width-error" class="error text-danger"
                                            for="input-width">{{ $errors->first('width') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group{{ $errors->has('height') ? ' has-danger' : '' }}">
                                        <input
                                            class="input-money form-control{{ $errors->has('height') ? ' is-invalid' : '' }}"
                                            name="height" id="input-height" type="text" placeholder="{{ __('Altura') }}"
                                            value="{{ old('height', $product->height) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('height'))
                                        <span id="height-error" class="error text-danger"
                                            for="input-height">{{ $errors->first('height') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title ">Variações</h4>
                    <p class="card-category"> Exemplos de variações são: cores e tamanhos</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a href="#" class="btn btn-sm btn-info addVariation">Adicionar Variáveis</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-info">
                                <tr>
                                    <th>Foto</th>
                                    <th>Variação</th>
                                    <th>Estoque</th>
                                    <th>Preço</th>
                                    <th>Peso</th>
                                    <th class="text-right">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($product->products as $variation)
                                <tr>
                                    <td>
                                        <img class="photo" src="{{asset('img/no-photo-50.png')}}" alt="" width="50">
                                    </td>
                                    <td>{{$variation->variation}}</td>
                                    <td> @if($variation->stock == null)&infin; @else $variation->stock @endif</td>
                                    <td>R$ {!!convertMoneyUSAToBrazil($variation->price)!!}</td>
                                    <td>{{convertMoneyUSAToBrazil($variation->weight)}} Kg</td>
                                    <td class="td-actions text-right">
                                        <div class="btn-group">
                                            <a rel="tooltip" class="btn btn-info" href="#" title="Editar">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <a rel="tooltip" class="btn btn-danger btn-delete" href="#" title="Remover">
                                                <i class="material-icons">delete</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </div>
                                        <form id="delete-form"
                                            action="{{route('admin.product.delete', ['product' => $variation])}}"
                                            method="POST" style="display: none;">
                                            @csrf
                                            @method('delete')
                                        </form>

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
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header card-header-info">
                    <h4 class="card-title">{{ __('Tags') }}</h4>
                    <p class="card-category"> Exemplos de variações são: cores e tamanhos</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-info">
                                    <tr>
                                        <th>Nome</th>
                                        <th class="text-right">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($tags as $tag)
                                    <tr>
                                        <td>{{$tag->name}}</td>
                                        <td class="td-actions text-right">
                                            <div class="btn-group">
                                                <a rel="tooltip" class="btn btn-lg btn-link" href="#" title="Remover">
                                                    <i class="material-icons">delete</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </div>
                                            <form id="delete-form"
                                                action="{{route('admin.product.tag.delete', ['product' => $product, 'tag'=> $tag])}}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('delete')
                                            </form>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>Nenhuma tag vinculada</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                    <button class="btn btn-info btn-fab btn-round" data-toggle="modal" data-target="#addTag">
                        <i class="material-icons">add</i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header card-header-info">
                    <h4 class="card-title">{{ __('Categorias') }}</h4>
                    <p class="card-category"> Você vai ajudar seus clientes a encontrarem seus produtos mais rápido.
                    </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-info">
                                    <tr>
                                        <th>Nome</th>
                                        <th class="text-right">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categories as $category)
                                    <tr>
                                        <td>{{$category->name}}</td>
                                        <td class="td-actions text-right">
                                            <div class="btn-group">
                                                <a rel="tooltip" class="btn btn-lg btn-link" href="#" title="Remover">
                                                    <i class="material-icons">delete</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </div>
                                            <form id="delete-form"
                                                action="{{route('admin.product.category.delete', ['product' => $product, 'category'=> $category])}}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('delete')
                                            </form>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>Nenhuma categoria vinculada</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                    <button class="btn btn-info btn-fab btn-round" data-toggle="modal" data-target="#addCategory">
                        <i class="material-icons">add</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#select-category').select2();

    $("#select-tag").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });
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

const getCategories = async () => {
    return await axios.get(`{{route('api.category.index')}}`)
        .then(response => {
            return response.data;
        }).catch(error => console.log(error));
}

window.onload = async () => {
    let categories = await getCategories();
    let selectCategories = document.querySelector('#select-category');

    let variations = await getVariations();

    let selectVariations = document.querySelector('#select-variation');

    await createOptions(categories.data, selectCategories);
    await createOptions(variations.data, selectVariations);
}
$('#select-variation').on('change', function() {
    requestSend($(this).val());
});

const requestSend = async (optionId) => {
    let variation = await getVariationOptions(optionId);
    let selectOption = document.querySelector('#select-variation-option');
    createOptions(variation.options, selectOption);
}

$('#save').on('click', function(e) {
    e.preventDefault();
    $('#formUpdate').submit();
});


$('.addVariation').on('click', function() {
    $('#modalAddVariation').modal('show');
});
$('.new-variation-btn').on('click', function(e) {
    e.preventDefault();
    $('.new-variation').toggleClass('display-none');
    $('.main-variation').toggleClass('display-none');
});
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
                    <div class="main-variation">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="select-variation">Propriedade</label>
                                    <select class="form-control" name="variation_id" id="select-variation">
                                        <option disabled selected>Selecione..</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="select-variation-option">Valores da propriedade selecionadas</label>
                                    <select class="form-control" name="variation_option" id="select-variation-option">
                                        <option disabled selected>Selecione..</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-variation display-none">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="input-variation">Propriedade</label>
                                    <input type="text" class="form-control" name="variation_name" id="input-variation">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="input-variation-option">Valores da propriedade selecionadas (separe por
                                        vírgula)</label>
                                    <input type="text" class="form-control" name="variation_name_option"
                                        id="input-variation-option">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="btn btn-link btn-sm btn-info new-variation-btn">Adicionar Nova
                                propriedade</button>
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
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.product.category.store', ['product' => $product])}}" method="post"
                autocomplete="off" class="form-horizontal">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="category">Categorias</label>
                                <select class="form-control" name="categories[]" multiple="multiple"
                                    id="select-category">
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
<div class="modal fade" id="addTag" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.product.tag.store', ['product' => $product])}}" method="post"
                autocomplete="off" class="form-horizontal">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="category">Tags</label>
                                <select class="form-control" name="tags[]" multiple="multiple" id="select-tag">
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
@endsection