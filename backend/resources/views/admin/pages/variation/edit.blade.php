@extends('admin.templates.default', ['activePage' => 'variation', 'titlePage' => __('Variações')])

@section('title', 'Atualizar Variação')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-1 text-dark">Atualizar Variação</h1>
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
                <div class="col-6">
                    <div class="card card-info card-outline">
                        <form action="{{route('admin.variation.update', ['variation' => $variation->id])}}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                                name="name" id="name" value="{{old('name', $variation->name)}}">
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
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary float-right">Atualizar</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->
                </div>

                <!-- ./col -->
                <div class="col-6">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Propriedade das variações</h3>
                            <div class="card-tools">
                                <button class="btn btn-success btn-sm btnAddOption">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($variation->options as $option)
                                    <tr>
                                        <td id="row-name-{{$option->id}}">{{$option->name}}</td>
                                        <form id="form-name-{{$option->id}}"  action="{{route('admin.variation.option.update', ['option' => $option])}}" method="post">
                                            @csrf
                                            @method('put')
                                            <td id="input-name-{{$option->id}}" class="display-none">
                                                <input type="text" name="name" value="{{$option->name}}">
                                            </td>
                                        </form>
                                        <td class="text-center align-middle py-0">
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" data-id="{{$option->id}}"
                                                    class="btn btn-info btnEditOption">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-success btn-save display-none" data-id="{{$option->id}}">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                                <button
                                                    href="{{route('admin.variation.option.delete', ['option' => $option->id])}}"
                                                    class="btn btn-danger btn-delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan=6>Nenhum dado cadastrado</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>

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
@section('scripts')
<script type="text/javascript">
$('.btnAddOption').on('click', function(e) {
    e.preventDefault();
    $('#addOptionModal').modal('show');
});

$('.btnEditOption').on('click', function(e) {
    e.preventDefault();
    let id = $(this).data('id');

    $(`#input-name-${id}`).removeClass('display-none');
    $(`#row-name-${id}`).addClass('display-none');

    $(this).addClass('display-none');
    $(this).parent().find('.btn-save').removeClass('display-none');
});

$('.btn-save').on('click', function(e) {
    e.preventDefault();
    let id = $(this).data('id');
    console.log(id);
    $(`#form-name-${id}`).submit();
})


$('.select2').select2({
    tags: true
})
</script>
@endsection
@section('modals')
<div class="modal fade" id="addOptionModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Adicionar propriedade</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.variation.option.store')}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="variation_id" value="{{$variation->id}}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <select class="select2" multiple="multiple" name="option[]"
                                    data-placeholder="Selecione as propriedades" style="width: 100%;">
                                    @foreach($variation->options as $option)
                                    <option value="{{$option->name}}" selected>{{$option->name}}</option>
                                    @endforeach
                                </select>
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
@endsection