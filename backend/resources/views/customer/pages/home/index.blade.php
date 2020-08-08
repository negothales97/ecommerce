@extends('customer.templates.default')
@section('content')

<section class="banner"></section>

<section class="options">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('img/delivery.png')}}" alt="Icon">
                <p><strong>Frete grátis</strong> nas compras acima de R$250,00</p>
            </div>
            <div class="col-sm-6">
                <img src="{{asset('img/card.png')}}" alt="Icon">
                <p><strong>Até 6x sem juros</strong> nas compras acima de R$299,90</p>
            </div>
        </div>
    </div>
</section>

<section class="options-mobile">
    <div class="container">
        <div class="box-options-mobile">
            <h5>FRETE GRÁTIS</h5>
            <p>Para compras acima de R$250,00</p>
        </div>
    </div>
</section>

<section class="content">
    <section class="promotions">
        <div class="container">
            <h2>PROMOÇÕES</h2>
            <div class="slider">
                <button class="prev-carousel"><i class="fas fa-chevron-left"></i></button>
                <button class="next-carousel"><i class="fas fa-chevron-right"></i></button>
                <div class="slider-carousel">
                    <div class="box-carousel">
                        <div class="box-slider">
                            <div class="status">
                                <p>Novidade</p>
                            </div>
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
                            <div class="content-slider">
                                <p>Bermuda Jeans com Recortes</p>
                                <strong>R$189,90</strong><strike>R$239,00</strike>
                                <small>6x de R$31,50 sem juros</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="spotlight">
        <div class="container">
            <h2>CATEGORIAS EM DESTAQUE</h2>
            <div class="row">
                <div class="col-sm-2 col-6">
                    <div class="box-spotlight">
                        <h5>Blusas</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="box-spotlight">
                        <h5>Jaquetas</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="box-spotlight">
                        <h5>Calças</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="box-spotlight">
                        <h5>Bermudas</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="box-spotlight">
                        <h5>Coletes</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-6">
                    <div class="box-spotlight">
                        <h5>Vestidos</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wholesale">
        <div class="container">
            <div class="box-wholesale">
                <h3>Deseja comprar no <strong>atacado?</strong></h3>
                <button>Fale conosco</button>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <h2>NOVIDADES</h2>
            <div class="slider">
                <button class="prev-carousel-news"><i class="fas fa-chevron-left"></i></button>
                <button class="next-carousel-news"><i class="fas fa-chevron-right"></i></button>
                <div class="slider-carousel-news">
                    <div class="box-carousel">
                        <div class="box-slider">
                            <div class="status">
                                <p>Novidade</p>
                            </div>
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
                            <div class="content-slider">
                                <p>Bermuda Jeans com Recortes</p>
                                <strong>R$189,90</strong><strike>R$239,00</strike>
                                <small>6x de R$31,50 sem juros</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lightning-promotion">
        <div class="container">
            <h2>PROMOÇÃO RELÂMPAGO</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="box-promotion">
                        <img src="{{ asset('img/hour.png') }}" alt="Icon">
                        <div class="chronometer">
                            <p>12</p>
                            <p class="two-points">:</p>
                            <small>horas</small>
                        </div>
                        <div class="chronometer">
                            <p>15</p>
                            <p class="two-points">:</p>
                            <small>minutos</small>
                        </div>
                        <div class="chronometer">
                            <p>02</p>
                            <small>segundos</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider">
                <button class="prev-carousel-promotion"><i class="fas fa-chevron-left"></i></button>
                <button class="next-carousel-promotion"><i class="fas fa-chevron-right"></i></button>
                <div class="slider-carousel-promotion">
                    <div class="box-carousel">
                        <div class="box-slider">
                            <div class="status">
                                <p>Novidade</p>
                            </div>
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
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
                            <img src="{{asset('img/slider.jpg')}}" alt="Modelo">
                            <div class="content-slider">
                                <p>Bermuda Jeans com Recortes</p>
                                <strong>R$189,90</strong><strike>R$239,00</strike>
                                <small>6x de R$31,50 sem juros</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-about">
                        <h2>Sobre a marca</h2>
                        <p>
                            A Keep Jeans é uma marca de moda voltada aos públicos feminino e masculino, e tem como aseu principal produto desenvolvido o jeans.<br><br>

                            Num universo cercado de boas ideias e um público cada vez mais exigente e admirador de novas tendências, a Keep visa oferecer as melhores peças de roupas, estudando e pesquisando tudo em relação à moda e o que está em alta no mercado.<br><br>

                            Assim, seus produtos são desenvolvidos da melhor qualidade, alcançando o principal objetivo Keep, que é a total satisfação dos seus consumidores, principalmente dos apreciadores de moda.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="newsletter">
                        <h2>Receba promoções<br> e novidades</h2>
                        <form>
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