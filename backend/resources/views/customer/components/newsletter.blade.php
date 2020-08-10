<div class="col-sm-6">
    <div class="newsletter">
        <h2>Receba promoções<br> e novidades</h2>
        <form action="{{route('api.newsletter')}}" method="post">
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