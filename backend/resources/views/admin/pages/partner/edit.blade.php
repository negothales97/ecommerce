@extends('admin.templates.default')

@section('title', 'Editar Sócio')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-1 text-dark">Editar Sócio</h1>
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
                        <form action="{{route('admin.partner.update', ['resourceId' => $resource])}}" method="post"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text" value="{{$resource->name}}"
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
                                            <label for="input-file">Foto <small>(Selecionar somente se deseja
                                                    trocar)</small></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input"
                                                        id="input-file">
                                                    <label class="custom-file-label" for="input-file">Escolha
                                                        uma foto</label>
                                                </div>
                                            </div>
                                            @if ($errors->has('file'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('file') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="content_pt_BR">Conteúdo Português</label>
                                            <textarea name="content_pt_BR" id="input-content_pt_BR"
                                                class="form-control textarea {{$errors->has('content_pt_BR') ? 'is-invalid' : ''}}"
                                                required rows="5">{{$resource->content_pt_BR}}</textarea>
                                            @if ($errors->has('content_pt_BR'))
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
                                            <label for="content_en">Conteúdo Inglês</label>
                                            <textarea name="content_en" id="input-content_en"
                                                class="form-control textarea {{$errors->has('content_en') ? 'is-invalid' : ''}}"
                                                required rows="5">{{$resource->content_en}}</textarea>
                                            @if ($errors->has('content_en'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('content_en') }}</strong>
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