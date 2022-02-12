@extends('layouts.bloghead')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="px-6 padrr-2 py-4">
            <div class="flex blo-ck items-center">
                <div class="flex items-center middle">
                    <img class="w-10 h-10" src=" {{ asset('assets/profile.png') }} " alt="">
                    <p class="text-lg mx-2 text-gray-700 font-semibold">Tony Marshall</p>
                    <button class="focus:bg-green-500 mx-4 focus:text-white border py-2 px-4 rounded-lg font-bold border-green-500 text-green-600 sub-but">Subscribe</button>
                </div>
                <p class="text-2xl text-center mx-auto text-gray-900 font-semibold seed-title">The Value Of Corn</p>
            </div>

        </div>
        <div class="my-6">
            <img class="rounded-lg" src=" {{ asset('assets/seedmockup.png') }} " alt="">
        </div>
        <div class="my-10">
            <p class="max-w-5xl mx-auto text-justify text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Morbi non aliquam tempus ut adipiscing elementum 
                malesuada eget non. Pharetra odio adipiscing euismod 
                pretium quam leo bibendum est, euismod. Urna potenti 
                varius iaculis at est, nisi, nunc vulputate consectetur. 
                Amet molestie metus nullam amet viverra. Mauris 
                tortor, bibendum posuere pellentesque porttitor. Et felis 
                sit nulla cras aliquet.
                Dolor vulputate donec mattis et faucibus. Nibh habitant 
                quisque nibh adipiscing ultrices maecenas ac. Quis 
                euismod purus, ut lacus, pellentesque hac. Faucibus eu 
                vitae sagittis pulvinar sed enim fermentum. 
                Senectus eget sem scelerisque enim tristique erat 
                porttitor lacus, amet. Odio nisi, eget ut ullamcorper id 
                dui aliquet. Accumsan libero commodo est sit. Ac 
                viverra nunc elementum odio lacus, scelerisque pulvina
                congue lacinia. Id vehicula condimentum bibendum 
                arcu vitae gravida. 
                Cursus maecenas purus gravida adipiscing bibendum 
                proin. At pharetra sed vitae malesuada purus 
                scelerisque iaculis consectetur. Tellus molestie id mattis 
                interdum et sed. Proin semper lectus hac cras senectus 
                mauris tellus. Egestas lacus nec eu faucibus elementum. 
            </p>
        </div>
        <div class="max-w-5xl my-4 mx-auto">
            <div class="mb-2 flex items-center -mx-2">
                <span class="bg-green-500 text-white mx-2 font-semibold text-sm rounded-full py-2 px-4">Green</span>
                <span class="bg-green-500 text-white mx-2 font-semibold text-sm rounded-full py-2 px-4">Corn</span>
                <span class="bg-green-500 text-white mx-2 font-semibold text-sm rounded-full py-2 px-4">Maize</span>
                <span class="bg-green-500 text-white mx-2 font-semibold text-sm rounded-full py-2 px-4">Farm</span>
            </div>
            <div class="mb-2 flex items-center -mx-2">
                <div class="flex blo-ck items-center -mx-2 mt-4">
                    <div class="flex items-center">
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/shoot.svg') }}" alt=""> <span class="ml-1 text-gray-600">Shoot</span></a>
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/commentr.svg') }}" alt=""> <span class="ml-1 text-gray-600">Comment</span></a>
                    </div>
                    <div class="flex sec-row items-center">
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/reseed.svg') }}" alt=""> <span class="ml-1 text-gray-600">Reseed in GreenHolo</span></a>
                    </div>
                </div>
            </div>
            <hr class="bg-green-500 my-8">
        </div>
    </div>
@endsection 