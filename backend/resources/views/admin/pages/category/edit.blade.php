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
                        <form action="{{route('admin.category.update', ['category' => $category])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
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
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
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
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="meta_title">Título para SEO</label>
                                            <input type="text"
                                                class="form-control input-meta_title {{$errors->has('meta_title') ? 'is-invalid' : ''}}"
                                                name="meta_title" id="meta_title" value="{{old('meta_title', $category->meta_title)}}">
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
                                            <input type="text"
                                                class="form-control input-meta_description {{$errors->has('meta_description') ? 'is-invalid' : ''}}"
                                                name="meta_description" id="meta_description" value="{{old('meta_description', $category->meta_description)}}">
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
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection