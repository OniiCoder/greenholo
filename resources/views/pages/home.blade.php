@extends('layouts.navbar')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="flex -mx-1">
            <div class="hide-section w-full sm:w-full md:w-1/4 lg:w-1/5 xl:w-1/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="bg-white p-3 -m-3 rounded-lg">
                    <div>
                        <img class="w-full rounded-lg" src="{{ asset('assets/banner.png') }}" alt="">
                        <img class="mx-auto rounded-full w-15 -m-12" src="{{ asset('assets/profile.png') }}" alt="">
                        <p class="mt-16 mb-6" style="text-align: center; font-weight:bold; font-size:20px;">Welcome, Greg!</p>
                    </div>
                    <div class="mt-10">
                        <span class="flex items-center m-3 span">
                            <p class="text-gray-700 text-sm font-bold">People who viewed your profile</p> <span class="ml-auto text-green-500 font-bold">10</span>
                        </span>
                        <a href="/connections" class="flex items-center my-6 m-3">
                            <p class="text-gray-700 text-sm font-bold">Connections</p> <span class="ml-auto text-green-500 font-bold">190</span>
                        </a>
                        <a href="/network"><p class="m-3 text-green-500" style="font-weight: bold;">Grow your network</p></a>
                    </div>
                    <div class="mt-12 rounded-lg text-center border-2 p-3 border-green-200">
                        <a class="text-center text-green-700" style="font-weight: bold;" href="/savedseeds">Saved Seeds</a>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-full md:w-3/5 lg:w-3/5 xl:w-3/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="items-center p-1 -m-3 bg-white rounded-lg">
                    <a href="" class="m-3 post-button flex border-2 py-2 px-4 rounded-lg text-center border-green-200">
                        <img src="{{ asset('assets/write.svg') }}" alt=""> <span class="py-3 font-bold ml-4 span">Write a Seed</span>
                    </a>
                    <div class="flex items-center">
                        <div x-data="{ open: false }">
                            <button x-on:click="open = true" class="m-3 flex border-2 py-2 px-4 rounded-lg text-center border-green-200" href=""><img src="{{ asset('assets/camera.svg') }}" alt=""></button>
                            <div x-show.transition="open" x-on:click.away="open = false">
                                <div class="fixed z-10 inset-0 overflow-y-auto">
                                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                      <div class="fixed inset-0 transition-opacity">
                                        <div class="absolute inset-0 bg-gray-400 opacity-75"></div>
                                      </div>
                                      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
                                      <div class="inline-block p-3 align-bottom bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                       <div class="flex p-3">
                                           <p class="text-gray-700 font-medium text-lg">Edit Your Photo</p>
                                       </div>
                                       <div class="text-center p-20">
                                           <a class="text-center text-green-600 text-xl font-medium" href="">Upload or Drag images here</a>
                                       </div>
                                       <div class="inline-block">
                                           <button x-on:click="open = false" style="outline: none" class="py-2 px-4 bg-red-500 text-white text-lg font-semibold rounded-lg">Cancel</button>
                                           <button style="outline: none" class="py-2 px-4 bg-green-500 text-white text-lg font-semibold rounded-lg">Done</button>
                                       </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div x-data="{ open: false }">
                            <button x-on:click="open = true" class="m-3 flex border-2 py-2 px-4 rounded-lg text-center border-green-200" href=""><img src="{{ asset('assets/video.svg') }}" alt=""></button>
                            <div x-show.transition="open" x-on:click.away="open = false">
                                <div class="fixed z-10 inset-0 overflow-y-auto">
                                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                      <div class="fixed inset-0 transition-opacity">
                                        <div class="absolute inset-0 bg-gray-400 opacity-75"></div>
                                      </div>
                                      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
                                      <div class="inline-block p-3 align-bottom bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                       <div class="flex p-3">
                                           <p class="text-gray-700 font-medium text-lg">Select/Edit Your Video</p>
                                       </div>
                                       <div class="text-center p-20">
                                           <a class="text-center text-green-600 text-xl font-medium" href="">Upload or Drag your video here</a>
                                       </div>
                                       <div class="inline-block">
                                           <button x-on:click="open = false" style="outline: none" class="py-2 px-4 bg-red-500 text-white text-lg font-semibold rounded-lg">Cancel</button>
                                           <button style="outline: none" class="py-2 px-4 bg-green-500 text-white text-lg font-semibold rounded-lg">Done</button>
                                       </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div x-data="{ open: false }">
                            <button x-on:click="open = true" class="m-3 flex border-2 py-2 px-4 rounded-lg text-center border-green-200" href=""><img src="{{ asset('assets/document.svg') }}" alt=""></button>
                            <div x-show.transition="open" x-on:click.away="open = false">
                                <div class="fixed z-10 inset-0 overflow-y-auto">
                                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                      <div class="fixed inset-0 transition-opacity">
                                        <div class="absolute inset-0 bg-gray-400 opacity-75"></div>
                                      </div>
                                      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
                                      <div class="inline-block p-3 align-bottom bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                       <div class="flex p-3">
                                           <p class="text-gray-700 font-medium text-lg">Edit Your Photo</p>
                                       </div>
                                       <div class="p-20">
                                           <a class="text-left align-left border-2 border-green-500 py-2 px-4 font-medium text-green-600 rounded-lg" href="">Upload file</a>
                                       </div>
                                       <div class="inline-block">
                                           <button x-on:click="open = false" style="outline: none" class="py-2 px-4 bg-red-500 text-white text-lg font-semibold rounded-lg">Cancel</button>
                                           <button style="outline: none" class="py-2 px-4 bg-green-500 text-white text-lg font-semibold rounded-lg">Done</button>
                                       </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex -m-3 bg-white rounded-lg p-3 mt-8 items-center">
                    <p class="font-bold text-xl">Seeds</p>
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
                <div class="-m-3 bg-white rounded-lg p-3 mt-8">
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
                    <div class="flex blo-ck items-center -mx-2 mt-4">
                        <div class="flex items-center">
                            <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/shoot.svg') }}" alt=""> <span class="ml-1 text-gray-600">Shoot</span></a>
                            <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/commentr.svg') }}" alt=""> <span class="ml-1 text-gray-600">Reseed with comment</span></a>
                        </div>
                        <div class="flex sec-row items-center">
                            <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/reseed.svg') }}" alt=""> <span class="ml-1 text-gray-600">Reseed</span></a>
                            <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/share.svg') }}" alt=""> <span class="ml-1 text-gray-600">Seedmind</span></a>
                        </div>
                    </div>
                    <form class="flex items-center blo-ck mt-8 mb-4 relative">
                        <div class="flex items-center w-full">
                            <img class="w-12 h-12" src="{{ asset('assets/profile.png') }}" alt="">
                            <input class="form-input w-full h-12 bg-gray-200 focus:bg-white rounded-full px-5 ml-2 outline-none relative" type="text" placeholder="Add a Comment...">
                        </div>
                        <button class="submit-button bg-green-500 hover:bg-green-500 text-white font-bold mx-3 py-2 px-4 rounded-full outline-none border-0">Submit</button>
                    </form>
                </div>
            </div>
            {{--
            <div class="w-full sm:w-full md:w-1/4 lg:w-1/5 xl:w-1/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="bg-white p-3 -m-3 rounded-lg h-20"></div>
            </div>
             --}}

          </div>
    </div>
@endsection
