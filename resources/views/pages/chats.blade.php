@extends('layouts.navbar')

@section('content')
<div class="px-10 padrr py-5">
    <div class="flex blo-ck -mx-1">
        <div class="w-full sm:w-full md:w-1/4 lg:w-1/4 xl:w-1/4 mx-1 p-3 rounded-lg" style="height: auto;">
            <div class="bg-white p-3 flex items-center -m-3 rounded-lg">
                <p class="text-green-500 m-2 font-medium text-lg">Chats</p>
                <div class="ml-auto"><a href=""><img class="w-8" src=" {{ asset('assets/write.svg') }} " alt=""></a></div>
            </div>
            <div class="bg-white p-3 my-5 items-center -m-3 rounded-lg">
                <a href="" class="p-3 my-2 flex bg-green-100 w-full rounded-lg">
                    <img class="w-16 h-16" src=" {{ asset('assets/profile.png') }} " alt="">
                    <div class="max-m-sm mx-3">
                        <p class="text-black font-bold text-base">Ashley Morgan</p>
                        <p class="text-gray-600 text-sm">Thank you</p>
                    </div>
                    <span class="text-gray-600 mt-1 ml-auto text-xs">10:11 PM</span>
                </a>
                <a href="" class="p-3 my-2 flex border border-green-100 w-full rounded-lg">
                    <img class="w-16 h-16" src=" {{ asset('assets/profile.png') }} " alt="">
                    <div class="max-m-sm mx-3">
                        <p class="text-black font-bold text-base">Ashley Morgan</p>
                        <p class="text-gray-600 text-sm">Thank you</p>
                    </div>
                    <span class="text-gray-600 mt-1 ml-auto text-xs">10:11 PM</span>
                </a>
                <a href="" class="p-3 my-2 flex border border-green-100 w-full rounded-lg">
                    <img class="w-16 h-16" src=" {{ asset('assets/profile.png') }} " alt="">
                    <div class="max-m-sm mx-3">
                        <p class="text-black font-bold text-base">Ashley Morgan</p>
                        <p class="text-gray-600 text-sm">Thank you</p>
                    </div>
                    <span class="text-gray-600 mt-1 ml-auto text-xs">10:11 PM</span>
                </a>
                <a href="" class="p-3 my-2 flex border border-green-100 w-full rounded-lg">
                    <img class="w-16 h-16" src=" {{ asset('assets/profile.png') }} " alt="">
                    <div class="max-m-sm mx-3">
                        <p class="text-black font-bold text-base">Ashley Morgan</p>
                        <p class="text-gray-600 text-sm">Thank you</p>
                    </div>
                    <span class="text-gray-600 mt-1 ml-auto text-xs">10:11 PM</span>
                </a>
            </div>
        </div>
        <div class="w-full sm:w-full md:w-3/5 lg:w-3/5 xl:w-3/5 mx-1 p-3 rounded-lg" style="height: auto;">
            <div class="bg-white items-center p-3 flex -m-3 mb-8 rounded-lg">
                <img class="w-12 h-12" src=" {{ asset('assets/profile.png') }} " alt="">
                <p class="text-black mx-4 font-bold text-base">Ashley Morgan</p>
            </div>
            <div class="bg-white items-center p-3 flex -m-3 mb-8 rounded-lg">
                
            </div>
        </div>
    </div>
</div>
@endsection