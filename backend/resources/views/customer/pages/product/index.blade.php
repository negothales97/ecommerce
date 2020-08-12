@extends('customer.templates.default')
@section('content')

    <section class="content content-pages">
        <section class="category">
            <div class="container">
                <nav class="breadcrumb-pages" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Moda Masculina</li>
                        <li class="breadcrumb-item active" aria-current="page">Bermudas</li>
                    </ol>
                    <h4>Bermuda Jeans com Recortes</h4>
                </nav>
                <div class="row">
                    <div class="col-sm-8">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('img/slider2.jpg') }}" alt="Bermuda">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <form action="{{ route('cart.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-register">
                                        <span>Escolha a cor</span>
                                    </div>
                                    <div class="box-option-product-with-title">
                                        <label for="color1">
                                            <input type="radio" name="colors" id="color1">
                                            <img src="{{ asset('img/blue1.png') }}" alt="Cor">
                                        </label>
                                        <label for="color2">
                                            <input type="radio" name="colors" id="color2">
                                            <img src="{{ asset('img/blue2.png') }}" alt="Cor">
                                        </label>
                                        <label for="color3">
                                            <input type="radio" name="colors" id="color3">
                                            <img src="{{ asset('img/blue3.png') }}" alt="Cor">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-register">
                                        <span>Escolha o tamanho</span>
                                    </div>
                                    <div class="box-option-product-with-title">
                                        <label for="sizeP">
                                            <input type="radio" name="size" id="sizeP">
                                            <img src="{{ asset('img/sizep.jpg') }}" alt="Tamanho P">
                                        </label>
                                        <label for="sizeM">
                                            <input type="radio" name="size" id="sizeM">
                                            <img src="{{ asset('img/sizem.jpg') }}" alt="Tamanho M">
                                        </label>
                                        <label for="sizeG">
                                            <input type="radio" name="size" id="sizeG">
                                            <img src="{{ asset('img/sizeg.jpg') }}" alt="Tamanho G">
                                        </label>
                                        <label for="sizeGG">
                                            <input type="radio" name="size" id="sizeGG">
                                            <img src="{{ asset('img/sizegg.jpg') }}" alt="Tamanho GG">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-register">
                                        <span>Escolha a quantidade</span>
                                    </div>
                                    <div class="box-option-product-with-title">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="input-qty" name="qty" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="box-price">
                                        <p>R$<span>{{ convertMoneyUsaToBrazil($product->price) }}</span></p>
                                        <small>Em até 6x de R${{ convertMoneyUsaToBrazil($product->price / 6) }}</small>
                                        <button class="btn-orange">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="btn-options-toggle" id="btn-freight">
                                    Calcular frete
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </div>
                                <div class="box-options-toggle" id="option-freight">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="freight"
                                                placeholder="Digite seu CEP">
                                        </div>
                                    </form>
                                </div>
                                <div class="btn-options-toggle" id="btn-description">
                                    Descrição
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </div>
                                <div class="box-options-toggle" id="option-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mi ex, consequat at dui
                                        non, bibendum sollicitudin sem. Phasellus sollicitudin erat eu dapibus luctus.
                                    </p>
                                </div>
                                <div class="btn-options-toggle" id="btn-size">
                                    Guia de medidas
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </div>
                                <div class="box-options-toggle" id="option-size">
                                </div>
                                <div class="btn-options-toggle" id="btn-specifications">
                                    Especificações
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </div>
                                <div class="box-options-toggle" id="option-specifications">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relacionadas">
            <div class="container">
                <h2>RELACIONADOS</h2>
                <div class="slider">
                    <button class="prev-carousel-promotion"><i class="fas fa-chevron-left"></i></button>
                    <button class="next-carousel-promotion"><i class="fas fa-chevron-right"></i></button>
                    <div class="slider-carousel-promotion">
                        <div class="box-carousel">
                            <div class="box-slider">
                                <div class="status">
                                    <p>Novidade</p>
                                </div>
                                <img src="{{ asset('img/slider.jpg') }}" alt="Modelo">
                                <div class="content-slider">
                                    <p>Bermuda Jeans com Recortes</p>
                                    <strong>R$189,90</strong><strike>R$239,00</strike>
                                    <small>6x de R$31,50 sem juros</small>
                                </div>
                            </div>
                        </div>
                        <div class="box-carousel">
                            <div class="box-slider">
                                <div class="status">
                                    <p>Novidade</p>
                                </div>
                                <img src="{{ asset('img/slider.jpg') }}" alt="Modelo">
                                <div class="content-slider">
                                    <p>Bermuda Jeans com Recortes</p>
                                    <strong>R$189,90</strong><strike>R$239,00</strike>
                                    <small>6x de R$31,50 sem juros</small>
                                </div>
                            </div>
                        </div>
                        <div class="box-carousel">
                            <div class="box-slider">
                                <div class="status">
                                    <p>Novidade</p>
                                </div>
                                <img src="{{ asset('img/slider.jpg') }}" alt="Modelo">
                                <div class="content-slider">
                                    <p>Bermuda Jeans com Recortes</p>
                                    <strong>R$189,90</strong><strike>R$239,00</strike>
                                    <small>6x de R$31,50 sem juros</small>
                                </div>
                            </div>
                        </div>
                        <div class="box-carousel">
                            <div class="box-slider">
                                <div class="status">
                                    <p>Novidade</p>
                                </div>
                                @if ($product->mainProductImage())
                                    <img src="{{ asset('uploads/products/original/' . $product->mainProductImage()->file) }}"
                                        alt="Modelo">
                                @else
                                    <img src="{{ asset('img/slider.jpg') }}" alt="Modelo">
                                @endif
                                <div class="content-slider">
                                    <p>Bermuda Jeans com Recortes</p>
                                    <strong>R$189,90</strong><strike>R$239,00</strike>
                                    <small>6x de R$31,50 sem juros</small>
                                </div>
                            </div>
                        </div>
                        <div class="box-carousel">
                            <div class="box-slider">
                                <div class="status">
                                    <p>Novidade</p>
                                </div>
                                <img src="{{ asset('img/slider.jpg') }}" alt="Modelo">
                                <div class="content-slider">
                                    <p>Bermuda Jeans com Recortes</p>
                                    <strong>R$189,90</strong><strike>R$239,00</strike>
                                    <small>6x de R$31,50 sem juros</small>
                                </div>
                            </div>
                        </div>
                        <div class="box-carousel">
                            <div class="box-slider">
                                <div class="status">
                                    <p>Novidade</p>
                                </div>
                                <img src="{{ asset('img/slider.jpg') }}" alt="Modelo">
                                <div class="content-slider">
                                    <p>Bermuda Jeans com Recortes</p>
                                    <strong>R$189,90</strong><strike>R$239,00</strike>
                                    <small>6x de R$31,50 sem juros</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <div class="newsletter">
                            <h2>Receba promoções<br> e novidades</h2>
                            <form>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino">
                                    <label class="form-check-label" for="feminino">Feminino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexo" id="masculino"
                                        value="Masculino">
                                    <label class="form-check-label" for="masculino">Masculino</label>
                                </div>
                                <input type="email" name="email" placeholder="Seu melhor e-mail">
                                <button type="submit"><img src="{{ asset('img/send.png') }}" alt="Icon"></button>
                                <label class="checkbox">Concordo com a política de privacidade
                                    <input type="checkbox" name="accept">
                                    <span class="checkmark"></span>
                                </label>
                            </form>
                            <div class="box-medias">
                                <p>Siga-nos</p>
                                <a href="#"><img src="{{ asset('img/facebook.png') }}" alt="Facebook"></a>
                                <a href="#"><img src="{{ asset('img/instagram.png') }}" alt="Instagram"></a>
                                <a href="#">@keepjeans</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </section>

    <section id="mobile-medias">
        <div class="container">
            <div class="box-medias" id="box-medias-mobile">
                <p>Siga-nos</p>
                <a href="#"><img src="{{ asset('img/facebook.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('img/instagram.png') }}" alt="Instagram"></a>
                <a href="#">@keepjeans</a>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script type="text/javascript">
        $('.link-content').on('click', function(e) {
            let id = $(this).data('id');
            axios.get(`api/click/${id}`)
                .then(response => console.log(response))
                .catch(error => console.log(error))
        });

    </script>
@endsection
