<footer>
    <section class="info">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>Atendimento</h4>
                    <ul>
                        <li><a href="#"><img id="whatsapp" src="{{ asset('img/whatsapp.png') }}" alt="Whatsapp">(11) 98822-2222</a></li>
                        <li><a href="#"><img id="email" src="{{ asset('img/email.png') }}" alt="E-mail">sac@keepjeans.com.br</a></li>
                    </ul>
                    <ul>
                        <li>Horário de atendimento: <br>
                            Segunda à sexta-feira das 9h às 18hs</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>Informações</h4>
                    <ul>
                        <li><a href="#">Quem somos</a></li>
                        <li><a href="#">Sobre as entregas</a></li>
                        <li><a href="#">Formas de pagamento</a></li>
                        <li><a href="#">Política de privacidade</a></li>
                        <li><a href="#">Política de troca</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>Lojas</h4>
                    <ul>
                        <li><a href="#">Conheça nossas lojas</a></li>
                        <li><a href="#">Trabalhe conosco</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="payment">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Formas de Pagamento</h4>
                    <img id="img-payment" src="{{ asset('img/payment.png') }}" alt="Pagamento">
                </div>
                <div class="col-sm-6">
                    <h4>Segurança</h4>
                    <img src="{{ asset('img/security.png') }}" alt="Segurança">
                </div>
            </div>
        </div>
    </section>
    <div class="address">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>
                        Keep Jeens Confecções<br>
                        00.000.000/00000-00
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <strong>Endereço para compra no atacado</strong> <br>
                        Rua Xavantes, 434<br>
                        Brás, São Paulo, SP<br>
                        03027-000
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="#">Endereços para compra no varejo</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <small>&copy; 2020 Keep Jeans. Todos os direitos reservados.</small>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
    $('.slider-carousel').slick({
        prevArrow: $('.prev-carousel'),
        nextArrow: $('.next-carousel'),
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: false,
        autoplaySpeed: 2500,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    $('.slider-carousel-news').slick({
        prevArrow: $('.prev-carousel-news'),
        nextArrow: $('.next-carousel-news'),
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: false,
        autoplaySpeed: 2500,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    $('.slider-carousel-promotion').slick({
        prevArrow: $('.prev-carousel-promotion'),
        nextArrow: $('.next-carousel-promotion'),
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: false,
        autoplaySpeed: 2500,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    $(document).on('click', '.scroll', function(event) {
        var tela = $(window).width();
        if (tela < 768) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 120
            }, 800);
        } else {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 140
            }, 800);
        }

    });

    $('.btn-toggle').click(function() {
        $('#menu-mobile').show('slide', {
            direction: 'left'
        }, 1000);
        $('#overlay').css('display', 'block');
    });

    $('#close-menu').click(function() {
        $('#menu-mobile').hide('slide', {
            direction: 'left'
        }, 1000);
        $('#overlay').css('display', 'none');
    });

    $('#main-menu-mobile a').click(function() {
        $('#menu-mobile').hide('slide', {
            direction: 'left'
        }, 1000);
        $('#overlay').css('display', 'none');
    });
</script>
@yield('scripts')