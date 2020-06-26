@extends('admin.templates.default', ['activePage' => 'product', 'titlePage' => __('Produtos')])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Lista de Produtos</h4>
                        <p class="card-category"> Cadastre os produtos para o seu site</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{route('admin.product.create')}}"
                                    class="btn btn-sm btn-info">Adicionar</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-info">
                                    <tr>
                                        <th>Nome</th>
                                        <th>URL do Produto</th>
                                        <th>Título para SEO</th>
                                        <th>Descrição para SEO</th>
                                        <th class="text-right">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->slug}}</td>
                                        <td>{{$product->meta_title}}</td>
                                        <td>{{$product->meta_description}}</td>
                                        <td class="td-actions text-right">
                                            <div class="btn-group">
                                                <a rel="tooltip" class="btn btn-info"
                                                    href="{{route('admin.product.edit', ['product' => $product])}}"
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
                                                action="{{route('admin.product.delete', ['product' => $product])}}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('delete')
                                            </form>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">Nenhum produto cadastrado</td>
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
$('.btn-delete').on('click', function() {
    $('#delete-form').submit();
});
</script>
@endsection