<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenHolo Shop</title>

    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
    <nav class="mobile-nav navbar bg-white w-full px-10 py-5">
        <div class="flex items-center">
            <a href="/shop">
                <img src=" {{ asset('assets/shoplogo.svg') }} " alt="" style="max-width: 200px">
            </a>
            <div class="ml-auto flex items-center">
                <a class="m-5 shopsaved" href="/shop/saveditems"><img src=" {{ asset('assets/shopsaved.svg') }} " alt=""></a>
                <a href="/cart" class="m-5 cart p-2 font-bold text-xl w-10 h-10 rounded-full text-white bg-green-800 text-center">0</a>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
