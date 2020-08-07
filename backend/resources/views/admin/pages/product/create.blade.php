@extends('admin.templates.default', ['activePage' => 'product', 'titlePage' => __('Produtos')])

@section('title', 'Adicionar Produto')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-1 text-dark">Adicionar Produto</h1>
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
                        <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
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
                                            <label for="slug">URL do produto</label>
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
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Descrição</label>
                                            <textarea name="description" id="input-description"
                                                class="form-control textarea {{$errors->has('description') ? 'is-invalid' : ''}}"
                                                required rows="5"></textarea>
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
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="meta_description">Descrição para SEO</label>
                                            <textarea name="meta_description" id="input-meta_description"
                                                class="form-control {{$errors->has('meta_description') ? 'is-invalid' : ''}}"
                                                required rows="5"></textarea>
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
                                <button class="btn btn-primary float-right">Adicionar</button>
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