@extends('layouts.navbar')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="flex -mx-1">
            <div class="w-full hide-section sm:w-full md:w-1/4 lg:w-1/5 xl:w-1/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="bg-white p-3 -m-3 rounded-lg">
                    <p class="py-4 text-center mt-3 font-bold text-xl text-black">Notifications</p>
                    <p class="py-3 text-center text-gray-500 text-sm mb-3">You have <span>3</span> new <br> notifications</p>
                </div>
            </div>
            <div class="w-full sm:w-full md:w-3/5 lg:w-3/5 xl:w-3/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="bg-white p-3 -m-3 mb-8 rounded-lg">
                    <p class="text-gray-600 m-2 font-medium text-lg">New</p>
                </div>
                <div class="bg-white p-3 -m-3 p-8 mb-8 flex blo-ck rounded-lg">
                    <img class="w-16 h-16" src="{{ asset('assets/profile.png') }}" alt="">
                    <div class="flex items-center">
                        <p class="max-w-xl note-text text-left text-lg mx-8 text-gray-800">Bill Berry, your new connection, recently shared a seed you may be interested in.</p>
                        <p class="text-xs text-gray-500">2hrs ago</p>
                    </div>
                </div>
                <div class="bg-white p-3 -m-3 p-8 mb-8 flex blo-ck rounded-lg">
                    <img class="w-16 h-16" src="{{ asset('assets/profile.png') }}" alt="">
                    <div class="flex items-center">
                        <p class="max-w-xl note-text text-left text-lg mx-8 text-gray-800">Bill Berry, your new connection, recently shared a seed you may be interested in.</p>
                        <p class="text-xs text-gray-500">2hrs ago</p>
                    </div>
                </div>
                <div class="bg-white p-3 -m-3 p-8 mb-8 flex blo-ck rounded-lg">
                    <img class="w-16 h-16" src="{{ asset('assets/profile.png') }}" alt="">
                    <div class="flex items-center">
                        <p class="max-w-xl note-text text-left text-lg mx-8 text-gray-800">Bill Berry, your new connection, recently shared a seed you may be interested in.</p>
                        <p class="text-xs text-gray-500">2hrs ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection