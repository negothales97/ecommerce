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
                                    @forelse($variation->options as $option)
                                    <tr>
                                        <td id="table-{{$option->id}}">{{$option->name}}</td>
                                        <td class="display-none" id="form-{{$option->id}}">
                                            <form
                                                action="{{route('admin.variation.option.update', ['option' => $option])}}"
                                                method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label for="input-variation-option">Propriedade</label>
                                                    <input type="text" name="variation_name_option" class="form-control"
                                                        id="input-variation-option" placeholder="Propriedade"
                                                        value="{{$option->name}}">
                                                </div>
                                            </form>
                                        </td>
                                        <td class="td-actions text-right">
                                            <div class="btn-group">
                                                <a rel="tooltip" class="btn btn-info btn-edit" href="#"
                                                    data-id="{{$option->id}}" title="Editar">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <a rel="tooltip" class="btn btn-danger btn-delete" href="#"
                                                    title="Remover">
                                                    <i class="material-icons">delete</i>
                                                    <div class="ripple-container"></div>
                                                    <form class="form-delete"
                                                        action="{{route('admin.variation.option.delete', ['option' => $option])}}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                </a>
                                            </div>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">Nenhuma propriedade cadastrada</td>
                                    </tr>
                                    @endforelse

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
@section('scripts')
<script type="text/javascript">
$('.btn-delete').on('click', function(e) {
    e.preventDefault();
    $(this).find('.form-delete').submit();
})
$(document).on('click', '.btn-edit', function(e) {
    e.preventDefault();

    let icon = $(this).find('i');
    let idOption = $(this).data('id');
    let form = $(`#form-${idOption}`);
    let table = $(`#table-${idOption}`);

    if (icon.text() == 'edit') {
        icon.text('check');
        form.removeClass('display-none');
        table.addClass('display-none');
    } else {
        form.find('form').submit();
    }
});
</script>
@endsection