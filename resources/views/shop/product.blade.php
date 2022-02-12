@extends('layouts.shophead')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="flex blo-ck my-6 -mx-2">
            <div class="middle full-width w-3/6 mx-2">
                <img class="w-full rounded-lg product-img" src=" {{ asset('assets/shopmockup.png') }} " alt="">
            </div>
            <div class="full-width ctrl middle w-2/6 ml-10 mr-2">
                <div class="flex items-center">
                    <p class="font-bold text-gray-800 text-2xl">LA’ Donot Tee</p>
                    <button class="ml-auto"><img src=" {{ asset('assets/shopsaved.svg')}} " alt=""></button>
                </div>
                <p class="my-4 font-semibold text-green-600 text-lg">In stock!</p>
                <p class="my-4 text-sm text-gray-700 max-w-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras scelerisque sollicitudin tellus, et posuere justo pellentesque id. Sed lobortis arcu mi. Vestibulum aliquam eros in diam condimentum vestibulum. Phasellus pretium fringilla ligula nec viverra. Proin ornare vehicula fringilla. Aliquam a efficitur nisi. Nam eget ligula eget diam tincidunt facilisis.</p>
                <p>Quantity part</p>
                <div class="flex items-center -mx-2">
                    <p class="mx-2 text-gray-900">Choose Size</p>
                    <button class="p-3 mx-2 font-bold text-lg text-gray-600">S</button>
                    <button class="p-3 mx-2 font-bold text-lg text-gray-600">M</button>
                    <button class="p-3 mx-2 font-bold text-lg text-gray-600">XL</button>
                </div>
                <p class="font-bold text-gray-600 text-xl my-4">$12.99</p>
                <button class="w-full py-4 bg-green-600 rounded-md text-white font-bold text-lg">Add To Cart</button>
            </div>
        </div>
    </div>
@endsection