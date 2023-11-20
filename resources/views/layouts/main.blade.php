<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- stili vite --}}
    @vite('resources/js/app.js')

    {{-- titolo  --}}
    <title>Laravel Model Controller</title>
</head>

<body style="min-height: 100vh">

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>
