@extends('admin.templates.default')

@section('title', 'Editar Menus')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-1 text-dark">Editar Menus</h1>
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
                        <form action="{{route('admin.menu.update', ['resourceId' => $resource->id])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company_pt_BR">Empresa Português</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('company_pt_BR') ? 'is-invalid' : ''}}"
                                                name="company_pt_BR" id="company_pt_BR"
                                                value="{{$resource->company_pt_BR}}">
                                            @if ($errors->has('company_pt_BR'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('company_pt_BR') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company_en">Empresa Inglês</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('company_en') ? 'is-invalid' : ''}}"
                                                name="company_en" id="company_en" value="{{$resource->company_en}}">
                                            @if ($errors->has('company_en'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('company_en') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="partner_pt_BR">Sócio Português</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('partner_pt_BR') ? 'is-invalid' : ''}}"
                                                name="partner_pt_BR" id="partner_pt_BR"
                                                value="{{$resource->partner_pt_BR}}">
                                            @if ($errors->has('partner_pt_BR'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('partner_pt_BR') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="partner_en">Sócio Inglês</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('partner_en') ? 'is-invalid' : ''}}"
                                                name="partner_en" id="partner_en" value="{{$resource->partner_en}}">
                                            @if ($errors->has('partner_en'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('partner_en') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="portfolio_pt_BR">Sócio Português</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('portfolio_pt_BR') ? 'is-invalid' : ''}}"
                                                name="portfolio_pt_BR" id="portfolio_pt_BR"
                                                value="{{$resource->portfolio_pt_BR}}">
                                            @if ($errors->has('portfolio_pt_BR'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('portfolio_pt_BR') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="portfolio_en">Sócio Inglês</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('portfolio_en') ? 'is-invalid' : ''}}"
                                                name="portfolio_en" id="portfolio_en" value="{{$resource->portfolio_en}}">
                                            @if ($errors->has('portfolio_en'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('portfolio_en') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="content_pt_BR">Conteúdo Português</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('content_pt_BR') ? 'is-invalid' : ''}}"
                                                name="content_pt_BR" id="content_pt_BR"
                                                value="{{$resource->content_pt_BR}}">
                                            @if ($errors->has('content_pt_BR'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('content_pt_BR') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="content_en">Conteúdo Inglês</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('content_en') ? 'is-invalid' : ''}}"
                                                name="content_en" id="content_en" value="{{$resource->content_en}}">
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
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="contact_pt_BR">Fale Conosco Português</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('contact_pt_BR') ? 'is-invalid' : ''}}"
                                                name="contact_pt_BR" id="contact_pt_BR"
                                                value="{{$resource->contact_pt_BR}}">
                                            @if ($errors->has('contact_pt_BR'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('contact_pt_BR') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="contact_en">Fale Conosco Inglês</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('contact_en') ? 'is-invalid' : ''}}"
                                                name="contact_en" id="contact_en" value="{{$resource->contact_en}}">
                                            @if ($errors->has('contact_en'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('contact_en') }}</strong>
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