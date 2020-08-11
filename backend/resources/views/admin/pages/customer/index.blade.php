@extends('admin.templates.default', ['activePage' => 'customer', 'titlePage' => __('Clientes')])

@section('title', 'Clientes')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Clientes</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <div class="float-right">
                            <a href="{{ route('admin.customer.create') }}">
                                <button class="btn btn-success act-include">
                                    Adicionar
                                </button>
                            </a>
                        </div>
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
                                <h3 class="card-title">Lista de Clientes</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-3">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Telefone</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->email }}</td>
                                                <td>{{ $customer->cellphone }}</td>
                                                <td class="text-center align-middle py-0">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="{{ route('admin.customer.edit', ['customer' => $customer->id]) }}"
                                                            class="btn btn-info">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <button
                                                            href="{{ route('admin.customer.delete', ['customer' => $customer->id]) }}"
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
