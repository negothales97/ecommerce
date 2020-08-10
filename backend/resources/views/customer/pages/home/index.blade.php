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
                    @foreach($promotions as $promotion)
                    @component('customer.components.product', ['product' => $promotion])
                    @endcomponent
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="spotlight">
        <div class="container">
            <h2>CATEGORIAS EM DESTAQUE</h2>
            <div class="row">
                <?php
                $numOfCols = 6;
                $rowCount = 0;
                $bootstrapColWidth = 12 / $numOfCols;
                ?>
                @foreach($featuredCategories as $featuredCategory)

                <div class="col-sm-{{$bootstrapColWidth}} col-6">
                    <div class="box-spotlight" data-url="{{route('category', ['slug' => $featuredCategory->slug])}}">
                        <h5>{{$featuredCategory->name}}</h5>
                    </div>
                </div>
                @php($rowCount++)
                @if($rowCount % $numOfCols == 0)
            </div>
            <div class="row">
                @endif
                @endforeach

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
                    @foreach($novelties as $novelty)
                    <div class="box-carousel">
                        @component('customer.components.product', ['product' => $novelty])
                        @endcomponent
                    </div>
                    @endforeach


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

                    @foreach($fastPromotions as $fastPromotion)
                    @component('customer.components.product', ['product' => $fastPromotion])
                    @endcomponent
                    @endforeach
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
                            A Keep Jeans é uma marca de moda voltada aos públicos feminino e masculino, e tem como aseu
                            principal produto desenvolvido o jeans.<br><br>

                            Num universo cercado de boas ideias e um público cada vez mais exigente e admirador de novas
                            tendências, a Keep visa oferecer as melhores peças de roupas, estudando e pesquisando tudo
                            em relação à moda e o que está em alta no mercado.<br><br>

                            Assim, seus produtos são desenvolvidos da melhor qualidade, alcançando o principal objetivo
                            Keep, que é a total satisfação dos seus consumidores, principalmente dos apreciadores de
                            moda.
                        </p>
                    </div>
                </div>
                @component('customer.components.newsletter')
                @endcomponent
            </div>
        </div>
    </section>
</section>

@component('customer.components.social-media')
@endcomponent

@endsection
@section('scripts')
<script type="text/javascript">

$('.box-spotlight').on('click', function(e) {
    e.preventDefault();
    let url = $(this).data('url');
    window.location.href = url;
});
</script>
@endsection