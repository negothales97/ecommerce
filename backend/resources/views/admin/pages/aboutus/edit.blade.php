@extends('admin.templates.default')
@section('title', 'Quem Somos')

@section('content')
<div class="content-wrapper">
    <form action="{{route('admin.aboutus.update', ['resourceId' => $resource->id])}}" method="POST">
        {{csrf_field()}}
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quem Somos</h1>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-primary float-right">Atualizar</button>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- ./row -->
            <div class="container-fluid">
                <div class="row card-en">
                    <div class="col-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">Dados - Inglês</h3>
                            </div>

                            <div class="card-body pad">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="input-subtitle_en">Título em inglês</label>
                                            <input name="subtitle_en" id="input-subtitle_en"
                                                class="form-control {{$errors->has('subtitle_en') ? 'is-invalid' : ''}}"
                                                value="{{$resource->subtitle_en}}" required>
                                            @if ($errors->has('subtitle_en'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('subtitle_en') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="input-content_en">Conteúdo em inglês</label>
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
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <div class="row card-br">
                    <div class="col-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">Dados - Português</h3>
                            </div>

                            <div class="card-body pad">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="input-subtitle_pt_BR">Título em português</label>
                                            <input name="subtitle_pt_BR" id="input-subtitle_pt_BR"
                                                class="form-control {{$errors->has('subtitle_pt_BR') ? 'is-invalid' : ''}}"
                                                value="{{$resource->subtitle_pt_BR}}" required>
                                            @if ($errors->has('subtitle_pt_BR'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('subtitle_pt_BR') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="input-content_pt_BR">Conteúdo em português</label>
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
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </form>
</div>
@stop