<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('admin.includes.head')
</head>

<body class="clickup-chrome-ext_installed">

    @include('admin.includes.header')
    
    @include('admin.includes.sidebar')
    @include('admin.includes.modals')

    @yield('content')


    @include('admin.includes.footer')
    

</body>

</html>