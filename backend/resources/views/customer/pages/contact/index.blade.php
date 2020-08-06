@extends('customer.templates.default')
@section('content')

<form action="{{route('contact')}}" method="post" style="margin:50px 0;">
    @csrf   
    <input type="text" name="name" placeholder="Nome">
    <input type="email" placeholder="E-mail" name="email" required>
    <input type="text" placeholder="Telefone" name="phone" required>
    <input type="text" name="subject" placeholder="Assunto">
    <textarea name="content" cols="30" rows="10" placeholder="Conteúdo"></textarea>

    <button type="submit">Send</button>
</form>


@endsection