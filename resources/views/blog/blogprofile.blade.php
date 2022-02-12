@extends('layouts.bloghead')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="flex blo-ck mx-6 items-center">
            <img class="w-20 h-20" src=" {{ asset('assets/profile.png') }} " alt="">
            <div class="flex blog-dit items-center">
                <p class="mx-4 font-bold blog-prof-name text-2xl text-gray-700">Joe Don</p>
                <p class="font-semibold text-green-600 text-sm">52.4k Subs</p>
            </div>
        </div>
        <div class="my-16">
            <p class="text-cen-ter text-green-500 mx-6 text-2xl font-bold my-4">Subscribers Seeds</p>
            <div class="flex blo-ck">
                <div class="w-full sm:w-full md:w-full lg:w-1/3 xl:w-1/3 mx-6 my-4 blog-card">
                    <div class="mb-4">
                        <img class="w-full rounded-lg" src=" {{ asset('assets/blogmockup.png') }} " alt="" style="max-height: 400px">
                    </div>
                    <div class="p-4">
                        <p class="max-w-sm text-xl text-green-500 font-bold">How to get fresh veges?</p>
                        <div class="flex items-center">
                            <div class="flex items-center my-6">
                                <img class="w-10 h-10" src=" {{ asset('assets/profile.png') }} " alt="">
                                <p class="text-lg mx-2 text-gray-700 font-semibold">Tony Marshall</p>
                            </div>
                            <button class="ml-auto focus:bg-green-500 focus:text-white border py-2 px-4 rounded-lg font-bold border-green-500 text-green-600">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-full md:w-full lg:w-1/3 xl:w-1/3 mx-6 my-4 blog-card">
                    <div class="mb-4">
                        <img class="w-full rounded-lg" src=" {{ asset('assets/blogmockup.png') }} " alt="" style="max-height: 400px">
                    </div>
                    <div class="p-4">
                        <p class="max-w-sm text-xl text-green-500 font-bold">How to get fresh veges?</p>
                        <div class="flex items-center">
                            <div class="flex items-center my-6">
                                <img class="w-10 h-10" src=" {{ asset('assets/profile.png') }} " alt="">
                                <p class="text-lg mx-2 text-gray-700 font-semibold">Tony Marshall</p>
                            </div>
                            <button class="ml-auto focus:bg-green-500 focus:text-white border py-2 px-4 rounded-lg font-bold border-green-500 text-green-600">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-full md:w-full lg:w-1/3 xl:w-1/3 mx-6 my-4 blog-card">
                    <div class="mb-4">
                        <img class="w-full rounded-lg" src=" {{ asset('assets/blogmockup.png') }} " alt="" style="max-height: 400px">
                    </div>
                    <div class="p-4">
                        <p class="max-w-sm text-xl text-green-500 font-bold">How to get fresh veges?</p>
                        <div class="flex items-center">
                            <div class="flex items-center my-6">
                                <img class="w-10 h-10" src=" {{ asset('assets/profile.png') }} " alt="">
                                <p class="text-lg mx-2 text-gray-700 font-semibold">Tony Marshall</p>
                            </div>
                            <button class="ml-auto focus:bg-green-500 focus:text-white border py-2 px-4 rounded-lg font-bold border-green-500 text-green-600">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-16">
            <p class="text-cen-ter text-green-500 mx-6 text-2xl font-bold my-4">My Seeds</p>
            <div class="flex blo-ck">
                <div class="w-full sm:w-full md:w-full lg:w-1/3 xl:w-1/3 mx-6 my-4 blog-card">
                    <div class="mb-4">
                        <img class="w-full rounded-lg" src=" {{ asset('assets/blogmockup.png') }} " alt="" style="max-height: 400px">
                    </div>
                    <div class="p-4">
                        <p class="max-w-sm text-xl text-green-500 font-bold">How to get fresh veges?</p>
                        <div class="flex items-center">
                            <div class="flex items-center my-6">
                                <img class="w-10 h-10" src=" {{ asset('assets/profile.png') }} " alt="">
                                <p class="text-lg mx-2 text-gray-700 font-semibold">Tony Marshall</p>
                            </div>
                            <button class="ml-auto focus:bg-green-500 focus:text-white border py-2 px-4 rounded-lg font-bold border-green-500 text-green-600">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-full md:w-full lg:w-1/3 xl:w-1/3 mx-6 my-4 blog-card">
                    <div class="mb-4">
                        <img class="w-full rounded-lg" src=" {{ asset('assets/blogmockup.png') }} " alt="" style="max-height: 400px">
                    </div>
                    <div class="p-4">
                        <p class="max-w-sm text-xl text-green-500 font-bold">How to get fresh veges?</p>
                        <div class="flex items-center">
                            <div class="flex items-center my-6">
                                <img class="w-10 h-10" src=" {{ asset('assets/profile.png') }} " alt="">
                                <p class="text-lg mx-2 text-gray-700 font-semibold">Tony Marshall</p>
                            </div>
                            <button class="ml-auto focus:bg-green-500 focus:text-white border py-2 px-4 rounded-lg font-bold border-green-500 text-green-600">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-full md:w-full lg:w-1/3 xl:w-1/3 mx-6 my-4 blog-card">
                    <div class="mb-4">
                        <img class="w-full rounded-lg" src=" {{ asset('assets/blogmockup.png') }} " alt="" style="max-height: 400px">
                    </div>
                    <div class="p-4">
                        <p class="max-w-sm text-xl text-green-500 font-bold">How to get fresh veges?</p>
                        <div class="flex items-center">
                            <div class="flex items-center my-6">
                                <img class="w-10 h-10" src=" {{ asset('assets/profile.png') }} " alt="">
                                <p class="text-lg mx-2 text-gray-700 font-semibold">Tony Marshall</p>
                            </div>
                            <button class="ml-auto focus:bg-green-500 focus:text-white border py-2 px-4 rounded-lg font-bold border-green-500 text-green-600">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection