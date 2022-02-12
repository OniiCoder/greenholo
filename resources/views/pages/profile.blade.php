@extends('layouts.navbar')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="">
            <div class="w-3/4 full-width style="height: auto;">
                <div class="bg-white rounded-lg p-3 -m-3">
                    <img class="w-full rounded-lg" style="height: 200px" src=" {{ asset('assets/banner.png') }} " alt="">
                    <img class="w-32 h-32 -mt-16 mx-8" src=" {{ asset('assets/profile.png') }} " alt="">
                    <div class="flex blo-ck">
                        <div class="w-2/3 full-width top-profile px-8">
                            <p class="text-green-800 font-bold text-2xl mt-8">Daniel Adetola</p>
                            <p class="text-gray-600 text-lg mt-2 font-medium">Farm manager</p>
                            <p class="text-gray-600 text-sm my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. nec, nisl posuere porttitor condimentum sit aliquam mi neque tristique interdum nunc. Eget eu, sed eu ornare congue platea quis.</p>
                            <div class="flex items-center my-2">
                                <a class="text-green-600" href="">danielade.com</a>
                                <img class="mx-2" src=" {{ asset('assets/dot.svg') }} " alt="">
                                <p class="text-gray-500">Joined 2018</p>
                            </div>
                            <div class="flex blo-ck items-center my-2">
                                <div class="flex items-center">
                                    <p class="text-green-600 text-sm">Nigeria</p>
                                    <img class="mx-2" src=" {{ asset('assets/dot.svg') }} " alt="">
                                    <a class="text-green-600 text-sm" href="">500+ Connections</a>
                                </div>
                                <img class="mx-2 hide-section" src=" {{ asset('assets/dot.svg') }} " alt="">
                                <a class="text-green-600 text-sm" href="">Contact Info</a>
                            </div>
                        </div>
                        <div class="w-1/2 full-width px-4">
                            <div class="flex items-center -mx-1">
                                <a class="text-center py-2 px-4 bg-green-500 font-bold text-white rounded-lg mx-1" href="">Message</a>
                                <a class="text-center py-2 px-4 border-gray-500 border font-bold text-gray-500 rounded-lg mx-1" href="">More</a>
                            </div>
                            <div class="flex items-center my-6">
                                <img class="w-10 h-10" src=" {{ asset('assets/profile.png') }} " alt="">
                                <div class="mx-4">
                                    <p class="text-sm text-black">Graduated from</p>
                                    <p class="text-sm font-semibold text-green-500">Harvard University</p>
                                </div>
                            </div>
                            <div class="flex items-center my-6">
                                <img class="w-10 h-10" src=" {{ asset('assets/profile.png') }} " alt="">
                                <div class="mx-4">
                                    <p class="text-sm text-black">Working at</p>
                                    <p class="text-sm font-semibold text-green-500">Starbucks</p>
                                </div>
                            </div>
                            <div class="my-4">
                                <p class="text-gray-700 text-lg font-medium">Green Skills</p>
                                <div class="flex items-center -mx-1 mt-3">
                                    <p class="text-xs border-2 border-green-200 py-2 px-4 text-green-600 text-black rounded-full font-bold mx-1">Land governance</p>
                                    <p class="text-xs border-2 border-green-200 py-2 px-4 text-green-600 text-black rounded-full font-bold mx-1">Climate change</p>
                                </div>
                            </div>
                            <div class="my-4">
                                <p class="text-gray-700 text-lg font-medium">IT Skills</p>
                                <div class="flex items-center -mx-1 mt-3">
                                    <p class="text-xs border-2 border-green-200 py-2 px-4 text-green-600 text-black rounded-full font-bold mx-1">Bioinformatics</p>
                                    <p class="text-xs border-2 border-green-200 py-2 px-4 text-green-600 text-black rounded-full font-bold mx-1">Cybersecurity</p>
                                </div>
                            </div>
                            <div class="my-4">
                                <p class="text-gray-700 text-lg font-medium">Soft Skills</p>
                                <div class="flex items-center -mx-1 mt-3">
                                    <p class="text-xs border-2 border-green-200 py-2 px-4 text-green-600 text-black rounded-full font-bold mx-1">Communications</p>
                                    <p class="text-xs border-2 border-green-200 py-2 px-4 text-green-600 text-black rounded-full font-bold mx-1">Networking</p>
                                </div>
                            </div>
                            <div class="my-4">
                                <p class="text-gray-700 text-lg font-medium">Area of Interest</p>
                                <div class="flex items-center -mx-1 mt-3">
                                    <p class="text-xs border-2 border-green-200 py-2 px-4 text-green-600 text-black rounded-full font-bold mx-1">Greentech</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-8 -m-3 my-8">
                    <p class="text-lg text-gray-600 font-semibold mb-8">Highlights</p>
                    <div class="flex blo-ck items-center">
                        <div class="flex items-center">
                            <img class="w-10 h-10 border-2 border-white rounded-full" src=" {{ asset('assets/profile.png') }} " alt="">
                            <img class="w-10 h-10 -ml-4 border-2 border-white rounded-full" src=" {{ asset('assets/profile.png') }} " alt="">
                        </div>
                        <div class="m-4">
                            <p class="text-green-800 text-sm font-bold">20 mutual connections</p>
                            <p class="text-gray-500 text-xs">You and Tolani both know Micheal angel, Luke Spanner and 18 others</p>
                        </div>
                    </div>

                </div>
                <div class="bg-white rounded-lg p-8 -m-3 my-8">
                    <p class="text-lg text-gray-600 font-semibold mb-8">About</p>
                    <p class="max-w-3xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra neque blandit imperdiet ac accumsan facilisis dignissim nunc. Auctor sit praesent nunc adipiscing varius tincidunt sed condimentum. Ultrices amet, lacus, tristique proin vulputate. Lobortis ultrices in etiam massa rhoncus sed et in auctor. Ultrices amet, lacus, tristique proin</p>
                </div>
                <div class="bg-white rounded-lg p-8 -m-3 my-8">
                    <p class="text-lg text-gray-600 font-semibold mb-8">Experience</p>
                    <div class="flex">
                        <img class="w-16 h-16 rounded-lg" src=" {{ asset('assets/profile.png') }} " alt="">
                        <div class="mx-4">
                            <p class="text-xl text-green-700 font-semibold">Farm manager</p>
                            <p class="text-sm text-green-600">Starbucks</p>
                            <p class="text-xs text-gray-500">Apr 2018 - Present</p>
                            <p class="text-xs text-gray-500">New york, USA</p>
                            <p class="text-xs text-gray-500">Full-time</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-8 -m-3 my-8">
                    <p class="text-lg text-gray-600 font-semibold mb-8">Education</p>
                    <div class="flex">
                        <img class="w-16 h-16 rounded-lg" src=" {{ asset('assets/profile.png') }} " alt="">
                        <div class="mx-4">
                            <p class="text-xl text-green-700 font-semibold">Harvard University</p>
                            <p class="text-sm text-green-600">Bachelor’s Degree, Biology</p>
                            <p class="text-sm text-gray-500">2016 - 2018</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-8 -m-3 my-8">
                    <p class="text-lg text-gray-600 font-semibold mb-8">Education</p>
                    <div class="flex blo-ck my-8">
                        <div class="flex full-width my-8 w-1/2">
                            <img class="w-16 h-16 rounded-lg" src=" {{ asset('assets/profile.png') }} " alt="">
                            <div class="mx-4">
                                <p class="text-xl text-green-700 font-semibold">Harvard University</p>
                                <p class="text-sm text-green-600">999,999 followers</p>
                            </div>
                        </div>
                        <div class="flex full-width my-8 w-1/2">
                            <img class="w-16 h-16 rounded-lg" src=" {{ asset('assets/profile.png') }} " alt="">
                            <div class="mx-4">
                                <p class="text-xl text-green-700 font-semibold">Harvard University</p>
                                <p class="text-sm text-green-600">999,999 followers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
