@extends('layouts.navbar')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="flex -mx-1">
            <div class="w-full mx-auto sm:w-full md:w-3/5 lg:w-3/5 xl:w-3/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="bg-white p-3 -m-3 rounded-lg">
                    <p class="text-lg text-gray-500 font-medium">Groups</p>
                </div>
                <div class="bg-white p-4 my-6 -m-3 rounded-lg">
                    <div class="flex blo-ck items-center">
                        <div class="flex items-center">
                            <img class="w-20 h-20" src=" {{ asset('assets/profile.png')}} " alt="">
                            <div class="mx-4">
                                <a class="text-green-700 text-xl font-bold" href="">#Group 1</a>
                            </div>
                        </div>
                        <div class="ml-auto message-button">
                            <a class="py-2 px-6 border-2 border-green-200 text-green-700 rounded-full font-bold" href="">View Group</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 my-6 -m-3 rounded-lg">
                    <div class="flex blo-ck items-center">
                        <div class="flex items-center">
                            <img class="w-20 h-20" src=" {{ asset('assets/profile.png')}} " alt="">
                            <div class="mx-4">
                                <a class="text-green-700 text-xl font-bold" href="">#Group 1</a>
                            </div>
                        </div>
                        <div class="ml-auto message-button">
                            <a class="py-2 px-6 border-2 border-green-200 text-green-700 rounded-full font-bold" href="">View Group</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection