@extends('admin.templates.default', ['activePage' => 'product', 'titlePage' => __('Produtos')])

@section('title', 'Editar Produto')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-1 text-dark">Editar Produto</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <form action="{{route('admin.product.edit', ['product' => $product->id])}}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info card-outline">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                                name="name" id="name" value="{{old('name', $product->name)}}">
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
                                            <label for="slug">URL do produto</label>
                                            <input type="text"
                                                class="form-control input-slug {{$errors->has('slug') ? 'is-invalid' : ''}}"
                                                name="slug" id="slug" value="{{old('slug', $product->slug)}}">
                                            @if ($errors->has('slug'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Descrição</label>
                                            <textarea name="description" id="input-description"
                                                class="form-control textarea {{$errors->has('description') ? 'is-invalid' : ''}}"
                                                required
                                                rows="5">{{old('description', $product->description)}}</textarea>
                                            @if ($errors->has('description'))
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
                                            <label for="meta_title">Título para SEO</label>
                                            <input type="text"
                                                class="form-control {{$errors->has('meta_title') ? 'is-invalid' : ''}}"
                                                name="meta_title" id="meta_title"
                                                value="{{old('meta_title', $product->meta_title)}}">
                                            @if ($errors->has('meta_title'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('meta_title') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="meta_description">Descrição para SEO</label>
                                            <textarea name="meta_description" id="input-meta_description"
                                                class="form-control textarea {{$errors->has('meta_description') ? 'is-invalid' : ''}}"
                                                required
                                                rows="5">{{old('meta_description', $product->meta_description)}}</textarea>
                                            @if ($errors->has('meta_description'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('meta_description') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- ./col -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Preços</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="price">Preço Original</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">R$</span>
                                                </div>
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('price') ? 'is-invalid' : ''}}"
                                                    name="price" id="price" value="{{old('price', $product->price)}}">
                                            </div>
                                            @if ($errors->has('price'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="promotional_price">Preço Promocional</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">R$</span>
                                                </div>
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('promotional_price') ? 'is-invalid' : ''}}"
                                                    name="promotional_price" id="promotional_price"
                                                    value="{{old('promotional_price', $product->promotional_price)}}">
                                            </div>
                                            @if ($errors->has('promotional_price'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('promotional_price') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Gestão</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="stock">Estoque</label>
                                                <input type="text"
                                                    class="form-control {{$errors->has('stock') ? 'is-invalid' : ''}}"
                                                    name="stock" id="stock" value="{{old('stock', $product->stock)}}">
                                            @if ($errors->has('stock'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('stock') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="sku">SKU</label>
                                            
                                                <input type="text"
                                                    class="form-control {{$errors->has('sku') ? 'is-invalid' : ''}}"
                                                    name="sku" id="sku"
                                                    value="{{old('sku', $product->sku)}}">
                                            @if ($errors->has('sku'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('sku') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="barcode">Código de barras (GTIN, EAN, ISBN, etc.)</label>
                                            
                                                <input type="text"
                                                    class="form-control {{$errors->has('barcode') ? 'is-invalid' : ''}}"
                                                    name="barcode" id="barcode"
                                                    value="{{old('barcode', $product->barcode)}}">
                                            @if ($errors->has('barcode'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('barcode') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Peso e dimensões</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="weight">Peso</label>
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('weight') ? 'is-invalid' : ''}}"
                                                    name="weight" id="weight" value="{{old('weight', $product->weight)}}">
                                            @if ($errors->has('weight'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('weight') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="depth">Comprimento</label>
                                            
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('depth') ? 'is-invalid' : ''}}"
                                                    name="depth" id="depth"
                                                    value="{{old('depth', $product->depth)}}">
                                            @if ($errors->has('depth'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('depth') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="width">Largura</label>
                                            
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('width') ? 'is-invalid' : ''}}"
                                                    name="width" id="width"
                                                    value="{{old('width', $product->width)}}">
                                            @if ($errors->has('width'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('width') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="height">Altura</label>
                                            
                                                <input type="text"
                                                    class="form-control input-money {{$errors->has('height') ? 'is-invalid' : ''}}"
                                                    name="height" id="height"
                                                    value="{{old('height', $product->height)}}">
                                            @if ($errors->has('height'))
                                            <span class="help-block">
                                                <small>
                                                    <strong>{{ $errors->first('height') }}</strong>
                                                </small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection