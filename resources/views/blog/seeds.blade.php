@extends('layouts.bloghead')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="my-6">
            <div class="mx-6 flex items-center">
                <p class="text-cen-ter text-green-500 text-2xl font-bold my-4">Seeds</p>
                <div class="flex relative items-center ml-auto">
                    <select class="block appearance-none font-semibold w-auto bg-white rounded-lg border-2 border-green-200 rounded-g hover:border-green-5 00 px-4 py-2 pr-8 leading-tight focus:outline-none focus:shadow-outline" style="font-family: 'Poppins', sans-serif;">
                        <option>Top</option>
                        <option>Latest</option>
                        <option>New</option>
                    </select>
                    <div class="absolute right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
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