@extends('customer.templates.default')
@section('content')

    <section class="content content-pages">
        <section class="category">
            <div class="container">
                <nav class="breadcrumb-pages" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Moda Masculina</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                    </ol>
                    <h4>{{ $category->name }}</h4>
                </nav>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="box-filter-desktop">
                                    <form>
                                        <p>Tamanho</p>
                                        <div class="box-filter-option">
                                            <label class="checkbox">P
                                                <input type="checkbox" name="sizeP">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">M
                                                <input type="checkbox" name="sizeM">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">G
                                                <input type="checkbox" name="sizeG">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">36
                                                <input type="checkbox" name="size36">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">38
                                                <input type="checkbox" name="size38">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">40
                                                <input type="checkbox" name="size40">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">42
                                                <input type="checkbox" name="size42">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">44
                                                <input type="checkbox" name="size44">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">46
                                                <input type="checkbox" name="size46">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <p>Cor</p>
                                        <div class="box-filter-option">
                                            <label class="checkbox">
                                                <div class="color-filter" id="yellow"></div>Amarelo
                                                <input type="checkbox" name="yellow">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">
                                                <div class="color-filter" id="black"></div>Preto
                                                <input type="checkbox" name="black">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">
                                                <div class="color-filter" id="blue"></div>Azul
                                                <input type="checkbox" name="blue">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">
                                                <div class="color-filter" id="blueDark"></div>Azul Marinho
                                                <input type="checkbox" name="blueDark">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">
                                                <div class="color-filter" id="gray"></div>Cinza
                                                <input type="checkbox" name="gray">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">
                                                <div class="color-filter" id="purple"></div>Roxo
                                                <input type="checkbox" name="purple">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div id="btn-filter-mobile">
                                    <img src="{{ asset('images/filter.png') }}" alt="Icon">
                                    Filtros e ordenação
                                </div>
                                <div class="box-filter-mobile">
                                    <div class="box-order-mobile">
                                        <p>
                                            Ordernar produtos por:
                                        </p>
                                        <a class="active" href="#">Maior preço</a>
                                        <a href="#">Menor preço</a>
                                    </div>
                                    <form>
                                        <p>Tamanho</p>
                                        <div class="box-filter-option">
                                            <label class="checkbox">P
                                                <input type="checkbox" name="sizeP">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">M
                                                <input type="checkbox" name="sizeM">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">G
                                                <input type="checkbox" name="sizeG">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">36
                                                <input type="checkbox" name="size36">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">38
                                                <input type="checkbox" name="size38">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">40
                                                <input type="checkbox" name="size40">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">42
                                                <input type="checkbox" name="size42">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">44
                                                <input type="checkbox" name="size44">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">46
                                                <input type="checkbox" name="size46">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <p>Cor</p>
                                        <div class="box-filter-option">
                                            <label class="checkbox">
                                                <div class="color-filter" id="yellow"></div>Amarelo
                                                <input type="checkbox" name="yellow">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">
                                                <div class="color-filter" id="black"></div>Preto
                                                <input type="checkbox" name="black">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">
                                                <div class="color-filter" id="blue"></div>Azul
                                                <input type="checkbox" name="blue">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">
                                                <div class="color-filter" id="blueDark"></div>Azul Marinho
                                                <input type="checkbox" name="blueDark">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">
                                                <div class="color-filter" id="gray"></div>Cinza
                                                <input type="checkbox" name="gray">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkbox">
                                                <div class="color-filter" id="purple"></div>Roxo
                                                <input type="checkbox" name="purple">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="box-order-desktop">
                                            <p>
                                                Ordernar produtos por:
                                            </p>
                                            <a class="active" href="#">Maior preço</a>
                                            <a href="#">Menor preço</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php
                                    $numOfCols = 3;
                                    $rowCount = 0;
                                    $bootstrapColWidth = 12 / $numOfCols;
                                    ?>
                                    @foreach ($category->products as $product)
                                        <div class="col-sm-{{ $bootstrapColWidth }} col-6">
                                            @component('customer.components.product', ['product' => $product])
                                            @endcomponent
                                        </div>@php($rowCount++)
                                            @if ($rowCount % $numOfCols == 0)
                                    </div>
                                    <div class="row">
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="box-loading">
                                                <img src="{{ asset('img/loading.png') }}" alt="Carregando">
                                                <p>Carregando mais <br> produtos</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @component('customer.components.about')
            @endcomponent
        </section>

        @component('customer.components.social-media')
        @endcomponent

    @endsection
