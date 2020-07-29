@extends('admin.templates.default', ['activePage' => 'variation', 'titlePage' => __('Variações')])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Lista de Variações</h4>
                        <p class="card-category"> Cadastre as novas variações e vincule-as a seu produto</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="#" class="btn btn-sm btn-info btnAddVariation">Adicionar</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-info">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Total de propriedades</th>
                                        <th class="text-right">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($variations as $variation)
                                    <tr>
                                        <td>{{$variation->name}}</td>
                                        <td>{{$variation->options()->count()}} Propriedades</td>
                                        <td class="td-actions text-right">
                                            <div class="btn-group">
                                                <a rel="tooltip" class="btn btn-info"
                                                    href="{{route('admin.variation.edit', ['variation' => $variation])}}"
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
                                                action="{{route('admin.variation.delete', ['variation' => $variation])}}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3">Nenhuma variação cadastrada.</td>
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

@stack('js')
@endsection

@section('scripts')
<script type="text/javascript">
$('.btnAddVariation').on('click', function(e) {
    e.preventDefault();
    $('#modalAddVariation').modal('show')
})
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
            <form action="{{route('admin.variation.store')}}" method="post"
                autocomplete="off" class="form-horizontal">
                @csrf
                <div class="modal-body">
                    <div class="new-variation">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="input-variation_name">Variação</label>
                                    <input type="text" class="form-control" name="name" id="input-variation_name">
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