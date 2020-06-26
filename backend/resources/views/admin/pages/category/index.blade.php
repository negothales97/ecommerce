@extends('admin.templates.default', ['activePage' => 'category', 'titlePage' => __('Categorias')])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Lista de Categorias</h4>
                        <p class="card-category"> Cadastre as categorias que tem no seu site</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{route('admin.category.create')}}" class="btn btn-sm btn-info">Adicionar</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-info">
                                    <tr>
                                        <th>Nome</th>
                                        <th>URL da Categoria</th>
                                        <th>Título para SEO</th>
                                        <th>Descrição para SEO</th>
                                        <th class="text-right">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                                    <input class="form-control input-slug" name="slug" id="input-slug"
                                                        type="text" placeholder="{{ __('URL da Categoria') }}"
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
                                                    <a rel="tooltip" class="btn btn-link btn-danger cancelCategory"
                                                        href="#">
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
var categories = '';
window.onload = async ()=> {
    categories = await getCategories();
    const firstCategories = categories.data.filter(item => !item.parent_id);
    firstCategories.forEach(category => createTreeView(category));
}

const getCategories = async()=> {
    return await axios.get("{{route('api.category.index')}}")
    .then(response => response.data);
}

const createTreeView = async (category) => {
    let tbody = $('tbody');

    let urlEdit = "{{route('admin.category.edit', ['category' =>'idCategory'])}}";
    urlEdit.replace('idCategory', category.id);

    let urlDelete = "{{route('admin.category.delete', ['category' =>'idCategory'])}}";
    urlDelete.replace('idCategory', category.id);

    let trCategory = $("<tr>");
    let tdName = $("<td>", {
        text: category.name
    });
    let tdSlug = $("<td>", {
        text: category.slug
    });
    let tdMetaTitle = $("<td>", {
        text: category.meta_title
    });
    let tdMetaDescription = $("<td>", {
        text: category.meta_description
    });
    let tdActions = $("<td>", {
        class: "td-actions text-right"
    });
    let divBtnGroup = $("<div>", {
        class: "btn-group"
    });

    let btnAddChildren = $("<a>", {
        "data-parent_id": category.id,
        class: "btn btn-info subcategory",
        href: "#"
    });
    let iconAddChildren = $("<i>", {
        class: "material-icons",
        text: "add"
    });

    let btnEdit = $("<a>", {
        "data-parent_id": category.id,
        class: "btn btn-info",
        href: urlEdit
    });
    let iconEdit = $("<i>", {
        class: "material-icons",
        text: "edit"
    });
    let btnDelete = $("<a>", {
        "data-parent_id": category.id,
        class: "btn btn-danger btn-delete",
        href: '#'
    });
    let iconDelete = $("<i>", {
        class: "material-icons",
        text: "delete"
    });
    let formDelete = $("<form>", {
        id: "delete-form",
        action: urlDelete,
        method: 'post',
        class: "display-none"
    });

    let inputToken = $("<input>", {
        type: "hidden",
        name: "_token",
        value: "{{ csrf_token() }}"
    });
    let inputMethod = $("<input>", {
        type: "hidden",
        name: "_method",
        value: "delete"
    });

    // Formulário de Exclusão
    formDelete.append(inputToken);
    formDelete.append(inputMethod);

    // Grupo de Botões
    btnAddChildren.append(iconAddChildren);
    btnEdit.append(iconEdit);
    btnDelete.append(iconDelete);

    divBtnGroup.append(btnAddChildren);
    divBtnGroup.append(btnEdit);
    divBtnGroup.append(btnDelete);
    // TD Actions
    tdActions.append(divBtnGroup);
    // TR Completa
    trCategory.append(tdName);
    trCategory.append(tdSlug);
    trCategory.append(tdMetaTitle);
    trCategory.append(tdMetaDescription);
    trCategory.append(tdActions);
    trCategory.append(formDelete);
    tbody.append(trCategory);

    const children = categories.data.filter(child => child.parent_id === category.id);
    if (children.length > 0) {
        children.map(createTreeView);
    }
}


$('.btn-delete').on('click', function() {
    $('#delete-form').submit();
});
$(document).on('click','.subcategory', function(e) {
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
// let cancelStore = document.querySelector('.cancelCategory');

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