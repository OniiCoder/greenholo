@extends('layouts.bloghead')

@section('content')
    <div class="px-10 padrr py-5">
        <p class="text-left max-w-sm font-bold text-2xl my-10 text-green-500 ">A seed just popped in your mind? Sustain it by sharing it</p>
        <div class="p-4 my-16 border border-green-200 rounded-lg">
            <div class="flex mobile-block items-center -mx-2">
                <input class="w-full krb-2 rounded-lg border-2 border-green-200 mx-2 px-4 py-4" type="text" placeholder="Title">
                <div class="flex relative krb mx-2 items-center ml-auto">
                    <select class="block full-width appearance-none font-semibold w-auto bg-white rounded-lg border-2 border-green-200 rounded-g hover:border-green-5 00 px-4 py-4 pr-8 leading-tight focus:outline-none focus:shadow-outline" style="font-family: 'Poppins', sans-serif;">
                        <option>Agriculture</option>
                        <option>Green Tech</option>
                    </select>
                    <div class="absolute right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            
            <button class="bg-green-500 mt-6 text-white font-bold rounded-lg text-xl py-2 px-6">Seed</button>
        </div>
    </div>
@endsection