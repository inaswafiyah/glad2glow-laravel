<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
</head>
<body>
    {{-- Navbar --}}
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')
</body>
</html>
