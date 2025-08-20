<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Hasthmelap')</title>
</head>
<body>
    @include('website.layout.header')

    <main>
        @yield('content')
    </main>

    @include('website.layout.footer')
</body>
</html>
