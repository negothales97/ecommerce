<form action="{{route('api.newsletter')}}" method="post">
    @csrf
    <fieldset>
        <input type="radio" name="genre" value="m" id="input-genre-m" required>
        <label for="input-genre-m">Masculino</label>
        <input type="radio" name="genre" value="f" id="input-genre-f">
        <label for="input-genre-f">Feminino</label>
    </fieldset>
    <input type="email" placeholder="Escolha o seu melhor email" name="email" required>
    <fieldset>
        <input type="checkbox" name="policy" id="policy" checked required>
        <label for="policy">Concordo com a política de privacidade</label>
    </fieldset>
    <button type="submit">Send</button>
</form>

<script type="text/javascript">

</script>