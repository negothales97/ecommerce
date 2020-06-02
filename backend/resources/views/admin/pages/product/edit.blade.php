@extends('admin.templates.default', ['activePage' => 'product', 'titlePage' => __('Produtos')])
@section('content')
<div class="content">
    <div class="container-fluid">
        @if (session('status'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('status') }}</span>
                </div>
            </div>
        </div>
        @endif
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
                                <div class="col-sm-4">
                                    <label for="input-file" id="label-file">
                                        <i class="material-icons">camera_alt</i>
                                    </label>
                                    <input type="file" name="file" id="input-file" multiple class="display-none">
                                </div>
                                @foreach($product->images as $image)
                                <div class="col-sm-4">
                                    <img src="{{asset('uploads/products/thumbnail/')}}/{{$image->file}}" alt="">
                                </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-info">{{ __('Salvar') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('admin.product.update', ['product' => $product]) }}"
                    autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('put')
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
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-info">{{ __('Editar') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">{{ __('Tags') }}</h4>
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
                                                    <a rel="tooltip" class="btn btn-lg btn-link" href="#"
                                                        title="Remover">
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
                                                    <a rel="tooltip" class="btn btn-lg btn-link" href="#"
                                                        title="Remover">
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

const getCategories = async () => {
    return await axios.get(`{{route('api.category.index')}}`)
        .then(response => {
            return response.data;
        }).catch(error => console.log(error));
}
window.onload = async () => {
    let categories = await getCategories();
    let selectCategories = document.querySelector('#select-category');

    categories.data.forEach((category) => {
        let option = document.createElement('option');
        let textOption = document.createTextNode(category.name);
        option.value = category.id;
        option.appendChild(textOption);
        selectCategories.appendChild(option)
    });
}
</script>
@endsection

@section('modals')
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