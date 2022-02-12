<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biota</title>

    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
    <nav class="mobile-nav navbar bg-white w-full px-10 py-5">
        <div class="flex items-center">
            <a href="/blog">
                <img src=" {{ asset('assets/biota.svg') }} " alt="" style="max-width: 200px">
            </a>
            {{--
            <div class="ml-auto flex items-center">
                <a class="m-2 text-xl font-semibold text-green-500 signin" href="">Sign In</a>
                <a class="m-2 border rounded-lg gs hover:bg-green-500 hover:text-white text-green-600 border-green-500 font-bold py-3 px-4" href="">Get Started</a>
            </div>
            --}}
            <div class="ml-auto flex items-center">
                <a class="m-2 border rounded-lg gs hover:bg-green-500 hover:text-white text-green-600 border-green-500 font-bold py-3 px-4" href="/blog/write">Write</a>
                <a href="/blog/profile"><img class="w-10 h-10 m-2" src=" {{ asset('assets/profile.png') }} " alt=""></a>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="mt-10 padrr py-10 px-10 bg-gray-100">
        <img src=" {{ asset('assets/Biota.svg') }} " alt="">
        <div class="flex -mx-3 mt-6 mb-4">
            <a class="mx-3 font-semibold text-green-700" href="/blog/write">Get Started</a>
            <a class="mx-3 font-semibold text-green-700" href="/seeds">Subscribe</a>
            <a class="mx-3 font-semibold text-green-700" href="/home">GreenHolo</a>
        </div>
        <div class="flex -mx-3 my-4">
            <a class="mx-3 font-semibold text-green-700" href="">Legal</a>
            <a class="mx-3 font-semibold text-green-700" href="">Terms & Conditions</a>
        </div>
        <p class="my-6 text-xs text-gray-500">Copyright 2020 Biota</p>

    </footer>
</body>
</html>
