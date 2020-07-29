@extends('admin.templates.default')

@section('title', 'Banners')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Banners</h1>
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
                        <form action="{{route('admin.other.update', ['resourceId' => $other->id])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="banner_pt_BR">Banner Português</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('banner_pt_BR') ? 'is-invalid' : ''}}"
                                                name="banner_pt_BR" id="banner_pt_BR" value="{{$other->banner_pt_BR}}">
                                            @if ($errors->has('banner_pt_BR'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('banner_pt_BR') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="banner_en">Banner Inglês</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('banner_en') ? 'is-invalid' : ''}}"
                                                name="banner_en" id="banner_en" value="{{$other->banner_en}}">
                                            @if ($errors->has('banner_en'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('banner_en') }}</strong>
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
            <div class="row mt-5 mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="float-right">
                        <a href="{{route('admin.banner.create')}}">
                            <button class="btn btn-success act-include">
                                Adicionar
                            </button>
                        </a>
                    </div>
                </div><!-- /.col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Banners</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-3">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nome</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($resources as $resource)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <img src="{{asset('uploads/').'/'.$resource->file}}"
                                                alt="{{$resource->name}}" class="img-thumbnail">
                                        </td>
                                        <td>{{$resource->name}}</td>
                                        <td class="text-center align-middle py-0">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('admin.banner.edit', ['resourceId' => $resource->id])}}"
                                                    class="btn btn-info">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button onclick="deleteItem(this, 1)"
                                                    data-href="{{route('admin.banner.delete', ['resourceId' => $resource->id])}}"
                                                    class="btn btn-danger act-delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan=3>Nenhum banner cadastrado</td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
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