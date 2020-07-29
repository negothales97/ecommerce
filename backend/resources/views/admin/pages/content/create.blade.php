@extends('admin.templates.default')

@section('title', 'Adicionar Conteúdo')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-1 text-dark">Adicionar Conteúdo</h1>
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
                        <form action="{{route('admin.content.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="title_pt_BR">Título em português</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('title_pt_BR') ? 'is-invalid' : ''}}"
                                                name="title_pt_BR" id="title_pt_BR">
                                            @if ($errors->has('title_pt_BR'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('title_pt_BR') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="title_en">Título Inglês</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('title_en') ? 'is-invalid' : ''}}"
                                                name="title_en" id="title_en">
                                            @if ($errors->has('title_en'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('title_en') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="input-file">Capa</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input"
                                                        id="input-file">
                                                    <label class="custom-file-label" for="input-file">Escolha
                                                        a capa</label>
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
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="link">Link</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('link') ? 'is-invalid' : ''}}"
                                                name="link" id="link">
                                            @if ($errors->has('link'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('link') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="resume_pt_BR">Resumo Português</label>
                                            <textarea name="resume_pt_BR" id="input-resume_pt_BR"
                                                class="form-control textarea {{$errors->has('resume_pt_BR') ? 'is-invalid' : ''}}"
                                                required rows="5"></textarea>
                                            @if ($errors->has('resume_pt_BR'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('resume_pt_BR') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="resume_en">Resumo Inglês</label>
                                            <textarea name="resume_en" id="input-resume_en"
                                                class="form-control textarea {{$errors->has('resume_en') ? 'is-invalid' : ''}}"
                                                required rows="5"></textarea>
                                            @if ($errors->has('resume_en'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('resume_en') }}</strong>
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