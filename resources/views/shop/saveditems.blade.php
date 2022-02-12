@extends('layouts.shophead')

@section('content')
    <div class="px-10 padrr py-5">
        <p class="text-2xl font-semibold text-gray-700">Saved Items</p>
        <div class="block sm:block md:flex lg:flex xl:flex  flex-wrap my-8">
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 xl:1/4 mx-6 my-4 middle" style="max-width: 260px">
                <a href="/shop/product">
                    <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                </a>
                <div class="flex items-center">
                    <div class="my-4">
                        <a href="/shop/product" class="italic text-black font-bold text-lg">LA’ Donot Tee</a>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 xl:1/4 mx-6 my-4 middle" style="max-width: 260px">
                <a href="/shop/product">
                    <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                </a>
                <div class="flex items-center">
                    <div class="my-4">
                        <a href="/shop/product" class="italic text-black font-bold text-lg">LA’ Donot Tee</a>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 xl:1/4 mx-6 my-4 middle" style="max-width: 260px">
                <a href="/shop/product">
                    <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                </a>
                <div class="flex items-center">
                    <div class="my-4">
                        <a href="/shop/product" class="italic text-black font-bold text-lg">LA’ Donot Tee</a>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 xl:1/4 mx-6 my-4 middle" style="max-width: 260px">
                <a href="/shop/product">
                    <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                </a>
                <div class="flex items-center">
                    <div class="my-4">
                        <a href="/shop/product" class="italic text-black font-bold text-lg">LA’ Donot Tee</a>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
        </div>
    </div>
@endsection