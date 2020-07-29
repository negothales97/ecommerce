@extends('admin.layout.auth')
@section('content')

@component('admin.components.auth-box',
[
'inputs' =>
[
'email' => ['email', 'email', 'E-mail', 'envelope'],
'password' => ['password', 'password', 'Senha', 'lock'],
'password_confirmation' => ['password', 'password_confirmation', 'Confirmação de Senha', 'lock'],
],
'btnName' => 'Resetar Senha'
])
@slot('token')
<input type="hidden" name="token" value="{{ $token }}">
@endslot
@slot('route')
{{ url('/admin/password/reset') }}
@endslot
@endcomponent

@endsection