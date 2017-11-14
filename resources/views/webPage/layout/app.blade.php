<!doctype html>
<html lang="es">
<head>

    <title>@yield('title') - OneNet</title>
    @include('webPage.layout.head')
</head>
<body>
    @include('webPage.layout.header')
    <div class="container" style="padding: 0;">
        @yield('content')
        @include('webPage.layout.contactenos_footer')
    </div>
    @include('webPage.layout.footer')
    @yield('scripts')

</body>
</html>