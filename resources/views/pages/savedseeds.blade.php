@extends('layouts.navbar')

@section('content')
    <div class="px-10 py-5">
        <div class="flex -mx-1">
            <div class="w-full mx-auto sm:w-full md:w-3/5 lg:w-3/5 xl:w-3/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="bg-white p-3 -m-3 rounded-lg">
                    <p class="text-lg text-gray-500 font-medium">Saved Seeds</p>
                </div>
                <div class="bg-white p-3 my-6 -m-3 rounded-lg">
                    <div class="flex">
                        <img class="w-16 h-16 rounded-full" src="{{ asset('assets/profile.png') }}" alt="">
                        <div class="ml-3 mt-2">
                            <p class="font-bold">Martha Roberts</p>
                            <p class="text-xs text-gray-500">Marine Engineer</p>
                            <p class="text-xs text-gray-500">2hrs ago</p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies enim sit dui metus ac suspendisse pretium. Aliquet vitae vitae nulla urna augue bibendum nulla curabitur. Enim tincidunt nibh blandit imperdiet sed condimentum  
                        </p>
                    </div>
                    <div class="mt-4">
                        <img class="w-full mx-auto rounded-lg" src="{{ asset('assets/post.png') }}" alt="">
                    </div>
                    <div class="flex items-center mt-4">
                        <p class="flex items-center"><img class="w-6 h-6" src="{{ asset('assets/shoots.svg') }}" alt=""> <span class="text-sm text-gray-500 ml-1">35</span></p>
                        <img class="mx-3" src="{{ asset('assets/dot.svg') }}" alt="">
                        <p class="text-sm text-gray-500">10 Comments</p>
                    </div>
                    <div class="flex items-center -mx-2 mt-4">
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/shoot.svg') }}" alt=""> <span class="ml-1 text-gray-600">Shoot</span></a>
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/commentr.svg') }}" alt=""> <span class="ml-1 text-gray-600">Reseed with comment</span></a>
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/reseed.svg') }}" alt=""> <span class="ml-1 text-gray-600">Reseed</span></a>
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/share.svg') }}" alt=""> <span class="ml-1 text-gray-600">Seedmind</span></a>
                    </div>
                    <div class="flex items-center mt-8 mb-4 relative">
                        <img class="w-12 h-12" src="{{ asset('assets/profile.png') }}" alt="">
                        <input class="form-input w-full h-12 bg-gray-200 focus:bg-white rounded-full px-5 ml-2 outline-none relative" type="text" placeholder="Add a Comment...">
                        <button class="right-0 bg-green-500 hover:bg-green-500 text-white font-bold mx-3 py-2 px-4 rounded-full outline-none border-0">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection