@extends('admin.templates.default', ['activePage' => 'variation', 'titlePage' => __('Variação')])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{ route('admin.variation.update',['variation' => $variation]) }}"
                    autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('put')

                    <div class="card ">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">{{ __('Editar Variação') }}</h4>
                            <p class="card-category">{{ __('Dados da variação') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-sm-3 col-form-label">{{ __('Nome') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" id="input-name" type="text" placeholder="{{ __('Nome') }}"
                                            value="{{ old('name', $variation->name) }}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('name') }}</span>
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
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Lista de Opções</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="#" class="btn btn-sm btn-info">Adicionar</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-info">
                                    <tr>
                                        <th>Nome</th>
                                        <th class="text-right">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="inline-text-field-container">

                                                <div class="mdc-text-field mdc-text-field--outlined">


                                                    <input class="mdc-text-field__input" autocorrect="off"
                                                        autocomplete="off" spellcheck="false" id="demo-mdc-text-field"
                                                        maxlength="524288">

                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch" style="">

                                                            <label for="demo-mdc-text-field" class="mdc-floating-label"
                                                                style="">
                                                                <!---->Label
                                                                <!----></label>

                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>

                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                    @forelse($variation->options as $subcategory)
                                    <tr>
                                        <td>{{$subcategory->name}}</td>
                                        <td class="td-actions text-right">
                                            <div class="btn-group">
                                                <a rel="tooltip" class="btn btn-info"
                                                    href="{{route('admin.category.edit', ['category' => $subcategory])}}"
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
                                                action="{{route('admin.category.delete', ['category' => $subcategory])}}"
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
@endsection