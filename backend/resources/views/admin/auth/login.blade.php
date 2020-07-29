@extends('admin.layout.auth')
@section('content')

@component('admin.components.auth-box',
[
'inputs' =>
[
'email' => ['email', 'email', 'E-mail', 'envelope'],
'password' => ['password', 'password', 'Senha', 'lock'],
],
'btnName' => 'Login'
])
@slot('route')
{{url('admin/login')}}
@endslot
@endcomponent


<p class="mb-1">
    <a href="{{url('admin/password/reset')}}">Esqueci a senha</a>
</p>


@endsection