@extends('layouts.navbar')

@section('content')
<div class="px-10 padrr py-5">
    <div class="flex blo-ck -mx-1">
        <div class="w-full sm:w-full md:w-1/4 lg:w-1/5 xl:w-1/5 mx-1 p-3 rounded-lg" style="height: auto;">
            <div class="bg-white p-3 -m-3 rounded-lg">
                <p class="text-gray-500 text-sm font-medium">My network</p>
            </div>
            <div class="bg-white my-5 p-3 -m-3 rounded-lg">
                <a href="/connections" class="flex items-center">
                    <p class="text-gray-700 text-sm font-bold">Connections</p> <span class="ml-auto text-green-500 font-bold">190</span>
                </a>
                <a href="/peoplefollowing" class="flex my-4 items-center">
                    <p class="text-gray-700 text-sm font-bold">People Following</p> <span class="ml-auto text-green-500 font-bold">20</span>
                </a>
                <a href="/groups" class="flex my-4 items-center">
                    <p class="text-gray-700 text-sm font-bold">Groups</p> <span class="ml-auto text-green-500 font-bold">10</span>
                </a>
                <a href="/newsletters" class="flex mt-4 items-center">
                    <p class="text-gray-700 text-sm font-bold">Newsletters</p> <span class="ml-auto text-green-500 font-bold">2</span>
                </a>
            </div>
            
        </div>
        <div class="w-full sm:w-full md:w-3/5 lg:w-3/5 xl:w-3/5 mx-1 p-3 rounded-lg" style="height: auto;">
            <div class="bg-white p-3 -m-3 rounded-lg">
                <p class="text-gray-600 m-2 font-medium text-lg">No pending invitations</p>
            </div>
            <div class="bg-white p-3 -m-3 my-8 rounded-lg">
                <div class="flex blo-ck mt-2">
                    <div class="bg-gray-100 mx-2 p-3 w-1/3 full-width card rounded-lg">
                        <img class="rounded-lg w-full" style="max-height: 80px" src=" {{ asset('assets/banner.png') }} " alt="">
                        <img class="rounded-lg w-20 h-20 mx-auto -mt-12" src=" {{ asset('assets/profile.png') }} " alt="">
                        <div class="my-10">
                            <p class="text-center text-black text-lg font-bold">Jake Anderson</p>
                            <p class="text-center my-2 text-gray-500 text-xs max-w-xs">Solar Energy Systems Engineer</p>
                        </div>
                        <button class="border-2 rounded-lg border-green-500 text-lg text-green-500 font-bold w-full text-center p-2">Connect</button>
                    </div>
                    <div class="bg-gray-100 mx-2 p-3 w-1/3 full-width card rounded-lg">
                        <img class="rounded-lg w-full" style="max-height: 80px" src=" {{ asset('assets/banner.png') }} " alt="">
                        <img class="rounded-lg w-20 h-20 mx-auto -mt-12" src=" {{ asset('assets/profile.png') }} " alt="">
                        <div class="my-10">
                            <p class="text-center text-black text-lg font-bold">Jake Anderson</p>
                            <p class="text-center my-2 text-gray-500 text-xs max-w-xs">Solar Energy Systems Engineer</p>
                        </div>
                        <button class="border-2 rounded-lg border-green-500 text-lg text-green-500 font-bold w-full text-center p-2">Connect</button>
                    </div>
                    <div class="bg-gray-100 mx-2 p-3 w-1/3 full-width card rounded-lg">
                        <img class="rounded-lg w-full" style="max-height: 80px" src=" {{ asset('assets/banner.png') }} " alt="">
                        <img class="rounded-lg w-20 h-20 mx-auto -mt-12" src=" {{ asset('assets/profile.png') }} " alt="">
                        <div class="my-10">
                            <p class="text-center text-black text-lg font-bold">Jake Anderson</p>
                            <p class="text-center my-2 text-gray-500 text-xs max-w-xs">Solar Energy Systems Engineer</p>
                        </div>
                        <button class="border-2 rounded-lg border-green-500 text-lg text-green-500 font-bold w-full text-center p-2">Connect</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection