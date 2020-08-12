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
            <div class="col-sm-6">
                <div class="newsletter">
                    <h2>Receba promoções<br> e novidades</h2>
                    <form action="{{ route('api.newsletter') }}" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="Seu melhor e-mail" required>
                        <button type="submit"><img src="{{ asset('img/send.png') }}" alt="Icon"></button>
                        <label class="checkbox">Concordo com a política de privacidade
                            <input type="checkbox" name="policy" required>
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
