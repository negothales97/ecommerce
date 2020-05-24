@extends('admin.templates.default', ['activePage' => 'category', 'titlePage' => __('Categorias')])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Lista de Categorias</h4>
                        <p class="card-category"> Cadastre as categorias que tem no seu site</p>
                    </div>
                    <div class="card-body">
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
                            <div class="col-12 text-right">
                                <a href="{{route('admin.category.create')}}"
                                    class="btn btn-sm btn-primary">Adicionar</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Nome</th>
                                        <th>URL da Categoria</th>
                                        <th>Título para SEO</th>
                                        <th>Descrição para SEO</th>
                                        <th class="text-right">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categories as $category)
                                    <tr>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>{{$category->meta_title}}</td>
                                        <td>{{$category->meta_description}}</td>
                                        <td class="td-actions text-right">
                                            <div class="btn-group">
                                                <a rel="tooltip" class="btn btn-info subcategory"
                                                    data-parent_id="{{$category->id}}" href="#"
                                                    title="Adicionar categoria filha">
                                                    <i class="material-icons">add</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <a rel="tooltip" class="btn btn-info"
                                                    href="{{route('admin.category.edit', ['category' => $category])}}"
                                                    title="Editar">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <a rel="tooltip" class="btn btn-danger btn-delete" href="#"
                                                    title="Remover">
                                                    <i class="material-icons">delete</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </div>
                                            <form id="delete-form"
                                                action="{{route('admin.category.delete', ['category' => $category])}}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('delete')
                                            </form>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">Nenhuma categoria cadastrada</td>
                                    </tr>
                                    @endforelse
                                    <tr class="addSubcategory display-none">
                                        <form action="{{route('admin.category.store')}}" method="post"
                                            autocomplete="off">
                                            @csrf
                                            <input type="hidden" name="parent_id" id="parent_id">
                                            <td>
                                                <div class="form-group">
                                                    <input class="form-control" name="name" id="input-name" type="text"
                                                        placeholder="{{ __('Nome') }}" value="{{ old('name') }}"
                                                        required="true" aria-required="true" />
                                                    <span id="name-error" class="error text-danger display-none"
                                                        for="input-name"></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input class="form-control" name="slug" id="input-slug" type="text"
                                                        placeholder="{{ __('URL da Categoria') }}"
                                                        value="{{ old('slug') }}" required="true"
                                                        aria-required="true" />
                                                    <span id="slug-error" class="error text-danger display-none"
                                                        for="input-slug"></span>
                                                </div>

                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input class="form-control" name="meta_title" id="input-meta_title"
                                                        type="text" placeholder="{{ __('Título para SEO') }}"
                                                        value="{{ old('meta_title') }}" required="true"
                                                        aria-required="true" />
                                                    <span id="meta_title-error" class="error text-danger display-none"
                                                        for="input-meta_title">{{ $errors->first('meta_title') }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input class="form-control" name="meta_description"
                                                        id="input-meta_description" type="text"
                                                        placeholder="{{ __('Descrição para SEO') }}"
                                                        value="{{ old('meta_description') }}" required="true"
                                                        aria-required="true" />
                                                    <span id="meta_description-error"
                                                        class="error text-danger display-none"
                                                        for="input-meta_description"></span>
                                                </div>
                                            </td>

                                            <td class="td-actions text-right">
                                                <div class="btn-group">
                                                    <a rel="tooltip" class="btn btn-link btn-success storeCategory"
                                                        href="#">
                                                        <i class="material-icons">done</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <a rel="tooltip" class="btn btn-link btn-danger" href="#">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stack('js')
@endsection

@section('scripts')
<script type="text/javascript">
$('.btn-delete').on('click', function() {
    $('#delete-form').submit();
});
$('.subcategory').on('click', function(e) {
    e.preventDefault();

    let icon = $(this).find('i');
    let trForm = $('.addSubcategory');

    if (icon.text() == 'add') {
        icon.text('remove');

        let parent_id = $(this).data('parent_id');

        trForm.removeClass('display-none');

        trForm.find('input[name=parent_id]').val(parent_id);
    } else {
        $(this).find('i').text('add');
        trForm.addClass('display-none');
    }
});

let btnStore = document.querySelector('.storeCategory');
btnStore.addEventListener("click", (e) => {
    e.preventDefault();
    let form = $('.addSubcategory form');
    let data = form.serialize();
    let url = form.attr('action');
    axios.post(url, data)
        .then((response) => {
            location.reload();
            console.log(response);
        })
        .catch(function(error) {
            validateError(error.response);
        });
});

const validateError = (response) => {
    const {
        status
    } = response;
    if (status === 422) {
        const {
            data: {
                errors
            }
        } = response;

        for (error in errors) {
            let elementError = $(`input[name=${error}]`);
            let spanError = $(`#${error}-error`);

            elementError.addClass('is-invalid');
            elementError.parent().addClass('has-error');
            spanError.removeClass('display-none');
            spanError.text(errors[error]);
        }
    }

}
</script>
@endsection