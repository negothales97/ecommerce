@extends('admin.templates.default', ['activePage' => 'category', 'titlePage' => __('Categorias')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('admin.category.store') }}" autocomplete="off" class="form-horizontal">
                    @csrf

                    <div class="card ">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">{{ __('Criar Categoria') }}</h4>
                            <p class="card-category">{{ __('Dados da categoria') }}</p>
                        </div>
                        <div class="card-body ">
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
                                <label class="col-sm-3 col-form-label">{{ __('Nome') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" id="input-name" type="text" placeholder="{{ __('Nome') }}"
                                            value="{{ old('name') }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('URL da categoria') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('slug') ? ' has-danger' : '' }}">
                                        <input class="input-slug form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                                            name="slug" id="input-slug" type="text" placeholder="{{ __('URL da categoria') }}"
                                            value="{{ old('slug') }}" required="true"
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
                                            name="meta_title" id="input-meta_title" type="text" placeholder="{{ __('Título para SEO') }}"
                                            value="{{ old('meta_title') }}" required="true"
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
                                        <input class="form-control{{ $errors->has('meta_description') ? ' is-invalid' : '' }}"
                                            name="meta_description" id="input-meta_description" type="text" placeholder="{{ __('Descrição para SEO') }}"
                                            value="{{ old('meta_description') }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('meta_description'))
                                        <span id="meta_description-error" class="error text-danger"
                                            for="input-meta_description">{{ $errors->first('meta_description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-info">{{ __('Adicionar') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection