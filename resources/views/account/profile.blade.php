@extends('layouts.header-footer')

@section('content')


<div class="container mt-12 mb-12 flex flex-row space-x-10 mx-auto">
    <div class="container md:w-4/5">
        <div class="bg-white border">
            <div class="bg-black h-64">
                <img class="h-full w-full object-cover" src="{{ asset('uploadedImages/bg-avatar.png') }}" />
            </div>
            <div class="px-10 py-8 flex flex-row">
                <div class="w-9/12">
                    <img class="-mt-40 w-4/12" src="{{ asset('uploadedImages/avatar.png') }}" alt="Profile photo" />
                    <h1 class="mt-4 text-4xl text-gray-900">Daniel Adetola</h1>
                    <h2 class="mt-2 text-2xl text-gray-600">Farm Manager</h2>
                    <div class="mt-2 flex space-x-2">
                        <span class="text-sm text-gray-600">
                            Nigeria 
                        </span>
                        <span class="text-sm text-gray-600">
                            •
                        </span>
                        <span class="text-sm text-green-500 font-bold">
                            500+ connections
                        </span>  
                        <span class="text-sm text-gray-600">
                            •
                        </span>
                        <span class="text-sm text-green-500 font-bold">
                            Contact info
                        </span>
                        
                    </div>
                </div>
                <div class="w-3/12 flex flex-col space-y-6">
                    <div>
                        <a class="px-4 py-3 bg-green-500 hover:bg-green-400 active:bg-green-600 focus:outline-none focus:shadow-outline text-white rounded-lg font-semibold shadow-lg" href="#" >Message</a> <button class="px-4 py-2 border rounded-lg">More...</button>
                    </div>
                    <div class="flex space-x-2 items-center">
                        <img src="{{ asset('uploadedImages/harvard.svg') }}" alt="Harvard"/>
                        <div class="">
                            <h4 class="text-gray-900 text-xs">Graduated from</h4>
                            <h4 class="text-green-500 text-xs">Harvard University</h4>
                        </div>
                    </div>
                    <div class="flex space-x-2 items-center">
                        <img src="{{ asset('uploadedImages/starbucks.svg') }}" alt="Harvard"/>
                        <div class="">
                            <h4 class="text-gray-900 text-xs">Working at</h4>
                            <h4 class="text-green-500 text-xs">Starbucks</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 bg-white border">
            <div class="px-10 py-8">
                <h1 class="text-gray-900 text-2xl">Highlights</h1>
                <h4 class="mt-4 text-md text-gray-900 font-bold">20 mutual connections</h4>
                <p class="mt-1 text-sm text-gray-600">You and Tolani both know Micheal angel, Luke Spanner and 18 others</p>
            </div>
        </div>

        <div class="mt-12 bg-white border">
            <div class="px-10 py-8">
                <h1 class="text-gray-900 text-2xl">About</h1>
                <p class="mt-4 text-sm text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra neque blandit imperdiet ac accumsan facilisis dignissim nunc. Auctor sit praesent nunc adipiscing varius tincidunt sed condimentum. Ultrices amet, lacus, tristique proin vulputate. Lobortis ultrices in etiam massa rhoncus sed et in auctor. Ultrices amet, lacus, tristique proin... <a class="text-gray-900" href="#">see more</a>
                </p>
            </div>
        </div>

    </div>
    <div class="hidden md:flex justify-center items-center w-1/5 h-48 bg-white border text-gray-600">Ads</div>
</div>


@endsection

