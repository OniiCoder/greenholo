@extends('layouts.bloghead')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="p-4 my-10">
            <p class="text-3xl font-bold mx-auto text-center max-w-lg text-green-500">Share and help out with Ongoing or Upcoming Projects</p>
            <p class="text-xl mx-auto text-center max-w-xl my-4 text-gray-800">Either you want to read or give needed assistance with a project or share your own project.</p>
            <div class="text-center py-4">
                <a class="bg-green-500 py-2 px-4 rounded-full text-white text-center mx-auto font-semibold" href="/blog/write">Get Started</a>
            </div>
        </div>
        <div class="py-10">
            <div class="my-6 mx-6 flex items-center">
                <p class="text-2xl font-bold text-green-500">Articles</p>
                <a class="font-semibold ml-auto text-sm text-grey-600" href="/blogs">More ></a>
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