@extends('admin.templates.default', ['activePage' => 'category', 'titlePage' => __('Categorias')])

@section('title', 'Editar Categoria')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-1 text-dark">Editar Categoria</h1>
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
                        <form action="{{route('admin.category.update', ['category' => $category])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                                name="name" id="name" value="{{old('name', $category->name)}}">
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
                                            <label for="slug">URL da Categoria</label>
                                            <input type="text"
                                                class="form-control input-slug {{$errors->has('slug') ? 'is-invalid' : ''}}"
                                                name="slug" id="slug" value="{{old('slug', $category->slug)}}">
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
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="input-status">Status</label>
                                            <select name="status" id="input-status"
                                                class="form-control input-status {{$errors->has('status') ? 'is-invalid' : ''}}">
                                                <option disabled>Selecione...</option>
                                                <option value="1" {{$category->status == 1 ? 'selected' : ''}}>Ativo</option>
                                                <option value="0" {{$category->status == 0 ? 'selected' : ''}}>Desativo</option>
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
                                            <label for="input-featured">Destaque</label>
                                            <select name="featured" id="input-featured"
                                                class="form-control input-featured {{$errors->has('featured') ? 'is-invalid' : ''}}">
                                                <option disabled selected>Selecione...</option>
                                                <option value="1" {{$category->featured == 1 ? 'selected' : ''}}>Sim</option>
                                                <option value="0" {{$category->featured == 0 ? 'selected' : ''}}>Não</option>
                                            </select>

                                            @if ($errors->has('featured'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('featured') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="meta_title">Título para SEO</label>
                                            <input type="text"
                                                class="form-control input-meta_title {{$errors->has('meta_title') ? 'is-invalid' : ''}}"
                                                name="meta_title" id="meta_title"
                                                value="{{old('meta_title', $category->meta_title)}}">
                                            @if ($errors->has('meta_title'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('meta_title') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="meta_description">Descrição para SEO</label>
                                            <input type="text"
                                                class="form-control input-meta_description {{$errors->has('meta_description') ? 'is-invalid' : ''}}"
                                                name="meta_description" id="meta_description"
                                                value="{{old('meta_description', $category->meta_description)}}">
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
                            <div class="card-footer">
                                <button class="btn btn-primary float-right">Atualizar</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->
                </div>

                <!-- ./col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Subcategorias</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-success btn-sm btnAddSubcategory"><i
                                        class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>URL da Categoria</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($category->categories as $subcategory)
                                    <tr>
                                        <td>{{$subcategory->name}}</td>
                                        <td class="text-center align-middle py-0">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('admin.category.edit', ['category' => $subcategory->id])}}"
                                                    class="btn btn-info">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button
                                                    href="{{route('admin.category.delete', ['category' => $subcategory->id])}}"
                                                    class="btn btn-danger act-delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                        @component('admin.components.subcategories',['category' => $subcategory])
                                        @endcomponent
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan=2>Nenhum dado cadastrado</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$('.btnAddSubcategory').on('click', function(e) {
    e.preventDefault();
    $('#addSubcategoryModal').modal('show')
});
</script>
@endsection
@section('modals')
<div class="modal fade" id="addSubcategoryModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Adicionar Subcategoria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.subcategory.store')}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="parent_id" value="{{$category->id}}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                    name="name" id="name">
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
                                <label for="slug">URL da Categoria</label>
                                <input type="text"
                                    class="form-control input-slug {{$errors->has('slug') ? 'is-invalid' : ''}}"
                                    name="slug" id="slug">
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="meta_title">Título para SEO</label>
                                <input type="text"
                                    class="form-control input-meta_title {{$errors->has('meta_title') ? 'is-invalid' : ''}}"
                                    name="meta_title" id="meta_title">
                                @if ($errors->has('meta_title'))
                                <span class="help-block">
                                    <small>
                                        <strong>{{ $errors->first('meta_title') }}</strong>
                                    </small>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="meta_description">Descrição para SEO</label>
                                <input type="text"
                                    class="form-control input-meta_description {{$errors->has('meta_description') ? 'is-invalid' : ''}}"
                                    name="meta_description" id="meta_description">
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
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection