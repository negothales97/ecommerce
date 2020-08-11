@extends('admin.templates.default', ['activePage' => 'newsletter', 'titlePage' => __('Newsletter')])

@section('title', 'Contatos')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Newsletters</h1>
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
                        <div class="card-header">
                            <h3 class="card-title">Lista de Newsletters</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-3">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>E-mail</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($newsletters as $newsletter)
                                    <tr>
                                        <td>{{$newsletter->email}}</td>
                                        <td class="text-center align-middle py-0">
                                            <div class="btn-group btn-group-sm">
                                                <!-- <a href="#"
                                                    class="btn btn-info">
                                                    <i class="fa fa-edit"></i>
                                                </a> -->
                                                <button
                                                    href="{{route('admin.newsletter.delete', ['newsletter' => $newsletter->id])}}"
                                                    class="btn btn-danger btn-delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan=3>Nenhum dado cadastrado</td>
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