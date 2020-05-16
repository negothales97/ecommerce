<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('admin.includes.head')
</head>

<body class="clickup-chrome-ext_installed">

    @include('admin.includes.header')
    
    @include('admin.includes.sidebar')

    @yield('content')

    @include('admin.includes.modals')

    @include('admin.includes.footer')
    
    @include('admin.includes.mask')
    @include('includes.functions')

</body>

</html>