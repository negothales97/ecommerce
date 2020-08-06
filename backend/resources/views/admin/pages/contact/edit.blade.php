@extends('admin.templates.default', ['activePage' => 'contact', 'titlePage' => __('Contatos')])

@section('title', 'Editar Contato')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-1 text-dark">Editar Contato</h1>
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
                        <form action="{{route('admin.contact.update', ['contact' => $contact->id])}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                                name="name" id="name" value="{{$contact->name}}">
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
                                            <label for="email">E-mail</label>
                                            <input type="email"
                                                class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                                                name="email" id="email" value="{{$contact->email}}">
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Telefone</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}"
                                                name="phone" id="phone" value="{{$contact->phone}}">
                                            @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Assunto</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('subject') ? 'is-invalid' : ''}}"
                                                name="subject" id="subject" value="{{$contact->subject}}">
                                            @if ($errors->has('subject'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('subject') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="subject">Mensagem</label>
                                            <textarea name="content" id="content" class="form-control {{$errors->has('subject') ? 'is-invalid' : ''}}">{{$contact->content}}</textarea>
                                            @if ($errors->has('subject'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('subject') }}</strong>
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