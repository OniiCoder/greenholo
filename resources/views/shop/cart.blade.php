@extends('layouts.shophead')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="flex blo-ck mx-auto">
            <div class="full-width w-2/4">
                <div class="block sm:block md:block lg:flex xl:flex flex-wrap my-8">
                    <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 xl:1/4 mx-6 my-4 middle" style="max-width: 260px">
                        <a href="">
                            <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                        </a>
                        <div class="flex items-center">
                            <div class="my-4">
                                <a href="" class="italic text-black font-bold text-lg">LA’ Donot Tee</a>
                                <p class="py-1 text-gray-900 text-sm font-medium">Quantity: 2</p>
                                <p class="italic text-gray-600 font-bold text-lg">$25.98</p>
                            </div>
                            <button class="bg-white p-3 ml-auto shadow-lg bg-red-300 rounded-full"><img src=" {{ asset('assets/trash.svg') }} " alt=""></button>
                        </div>
                    </div>
                    <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 xl:1/4 mx-6 my-4 middle" style="max-width: 260px">
                        <a href="">
                            <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                        </a>
                        <div class="flex items-center">
                            <div class="my-4">
                                <a href="" class="italic text-black font-bold text-lg">LA’ Donot Tee</a>
                                <p class="py-1 text-gray-900 text-sm font-medium">Quantity: 2</p>
                                <p class="italic text-gray-600 font-bold text-lg">$25.98</p>
                            </div>
                            <button class="bg-white p-3 ml-auto shadow-lg bg-red-300 rounded-full"><img src=" {{ asset('assets/trash.svg') }} " alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full-width middle w-1/3 mx-10">
                <div class="bg-gray-100 p-6 rounded-lg my-8">
                    <p class="font-bold text-green-600 text-xl mb-2">Order Summary</p>
                    <hr>
                    <div class="flex my-4 items-center">
                        <p class="italic text-black font-bold text-lg">2 Items</p>
                        <p class="ml-auto italic text-gray-600 font-bold text-lg">$51.96</p>
                    </div>
                    <div class="flex my-4 items-center">
                        <p class="italic text-black font-semibold text-sm">Shipping</p>
                        <p class="ml-auto italic text-gray-600 font-bold text-sm">$10.00</p>
                    </div>
                    <hr>
                    <div class="flex my-4 p-4 bg-green-500 rounded-lg items-center">
                        <p class="italic text-white font-bold text-lg">Total</p>
                        <p class="ml-auto italic text-white font-bold text-lg">$61.96</p>
                    </div>
                    <button class="text-center py-4 my-4 mx-auto w-full rounded-lg bg-black text-white font-bold text-lg">Checkout</button>
                </div>
            </div>
        </div>
    </div>
@endsection