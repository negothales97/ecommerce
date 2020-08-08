<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('customer.includes.head')
</head>

<body>

    @include('customer.includes.header')

    @yield('content')

    @include('customer.includes.footer')

</body>

</html>