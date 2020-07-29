@extends('admin.layout.auth')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@component('admin.components.auth-box',
[
'inputs' =>
[
'email' => ['email', 'email', 'E-mail', 'envelope'],
],
'btnName' => 'Enviar Link'
])
@slot('route')
{{ url('/admin/password/email') }}
@endslot
@endcomponent
@endsection