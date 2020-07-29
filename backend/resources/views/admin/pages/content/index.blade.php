@extends('admin.templates.default')

@section('title', 'Conteúdos')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Conteúdos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="float-right">
                        <a href="{{route('admin.content.create')}}">
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Filtros de Conteúdo</h3>
                        </div>
                        <!-- /.card-header -->
                        <form>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" class="form-control" name="title_pt_BR"
                                                value="{{request('title_pt_BR')}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Ordenação</label>
                                            <select name="orderby" class="form-control">
                                                <option {{request('orderby') == 'asc-title_pt_BR' ? "selected" : ""}}
                                                    value="asc-title_pt_BR">Ordernar de A à Z</option>
                                                <option {{request('orderby') == 'desc-title_pt_BR' ? "selected" : ""}}
                                                    value="desc-title_pt_BR">Ordernar de Z à A</option>
                                                <option {{request('orderby') == 'desc-click' ? "selected" : ""}}
                                                    value="desc-click">Mais clicados</option>
                                                <option {{request('orderby') == 'asc-click' ? "selected" : ""}}
                                                    value="asc-click">Menos clicados</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary ">Filtrar</button>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Conteúdos</h3>
                            <div class="card-tools">
                                <?php

                                $paginate = $resources;
                                $link_limit = 7;

                                $filters = '&title_pt_BR='.request('title_pt_BR');
                                $filters .= '&orderby='.request('orderby');
                                ?>

                                @if($paginate->lastPage() > 1)
                                <nav>
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item {{ ($paginate->currentPage() == 1) ? ' disabled' : '' }}">
                                            <a class="page-link {{ $paginate->url(1)}}" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        @for($i = 1; $i <= $paginate->lastPage(); $i++)
                                            <?php
                                            $half_total_links = floor($link_limit / 2);
                                            $from = $paginate->currentPage() - $half_total_links;
                                            $to = $paginate->currentPage() + $half_total_links;
                                            if ($paginate->currentPage() < $half_total_links) {
                                            $to += $half_total_links - $paginate->currentPage();
                                            }
                                            if ($paginate->lastPage() - $paginate->currentPage() < $half_total_links) {
                                            $from -= $half_total_links - ($paginate->lastPage() - $paginate->currentPage()) - 1;
                                            }
                                            ?>
                                            <li
                                                class="page-item {{ ($paginate->currentPage() == $i) ? ' active' : '' }}">
                                                <a class="page-link" href="{{ $paginate->url($i)}}">{{ $i }}</a>
                                            </li>
                                            @endfor
                                            <li
                                                class="page-item {{ ($paginate->currentPage() == $paginate->lastPage()) ? ' disabled' : '' }}">
                                                <a class="page-link" href=" {{ $paginate->url($paginate->lastPage())}}"
                                                    aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                    </ul>
                                </nav>
                                @endif
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-3">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Capa</th>
                                        <th>Título</th>
                                        <th>Link</th>
                                        <th>Cliques</th>
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
                                        <td>{{$resource->title_pt_BR}}</td>
                                        <td><a href="{{$resource->link}}" target="_blank">Acessar artigo</a></td>
                                        <td>{{$resource->click == null ? "Nenhum clique" : $resource->click}}</td>
                                        <td class="text-center align-middle py-0">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('admin.content.edit', ['resourceId' => $resource->id])}}"
                                                    class="btn btn-info">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button onclick="deleteItem(this, 1)"
                                                    data-href="{{route('admin.content.delete', ['resourceId' => $resource->id])}}"
                                                    class="btn btn-danger act-delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan=6>Nenhum conteúdo adicionado</td>
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