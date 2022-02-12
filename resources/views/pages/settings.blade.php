@extends('layouts.navbar')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="bg-white rounded-lg p-6">
            <p class="text-2xl text-green-500 font-bold">Account Details</p>
            <div class="my-10">
                <img class="w-32 h-32 up-pro" src=" {{ asset('assets/profile.png') }} " alt="">
                <form class="my-8" action="">
                    <div class="flex blo-ck w-full -mx-2 max-w-xl">
                        <div class="mx-2">
                            <label for="fn" class="block text-sm leading-5 font-medium text-gray-700">First Name*</label>
                            <input id="fn" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="First Name" placeholder="First Name" required>
                        </div>
                        <div class="mx-2">
                            <label for="ln" class="block text-sm leading-5 font-medium text-gray-700">Last Name*</label>
                            <input id="ln" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="Last Name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="flex -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="headline" class="block text-sm leading-5 font-medium text-gray-700">Headline*</label>
                            <textarea id="headline" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="Headline" required>
                            </textarea>
                        </div>
                    </div>
                    <div class="flex -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="cp" class="block text-sm leading-5 font-medium text-gray-700">Current Position*</label>
                            <input id="cp" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="currentposition" placeholder="">
                        </div>
                    </div>
                    <div class="flex -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="country" class="block text-sm leading-5 font-medium text-gray-700">Country/Region</label>
                            <div class="flex relative items-center">
                                <select id="country" class="block appearance-none font-normal w-full bg-gray-200 rounded-lg border border-gray-200 hover:border-gray-500 mb-3 px-4 py-3 pr-8 leading-tight focus:outline-none focus:shadow-outline" style="font-family: 'Poppins', sans-serif;">
                                    <option>Nigeria</option>
                                </select>
                                <div class="absolute right-0 flex -mt-2 items-center px-2 text-gray-700 pointer-events-none">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    <div class="flex -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="location" class="block text-sm leading-5 font-medium text-gray-700">Location In Country/Region</label>
                            <div class="flex relative items-center">
                                <select id="location" class="block appearance-none mb-3 font-normal w-full bg-gray-200 rounded-lg border border-gray-200 hover:border-gray-500 px-4 py-3 pr-8 leading-tight focus:outline-none focus:shadow-outline" style="font-family: 'Poppins', sans-serif;">
                                    <option>Nigeria</option>
                                </select>
                                <div class="absolute right-0 flex -mt-2 items-center px-2 text-gray-700 pointer-events-none">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    <div class="flex -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="industry" class="block text-sm leading-5 font-medium text-gray-700">Industry*</label>
                            <div class="flex relative items-center">
                                <select id="industry" class="block appearance-none mb-3 font-normal w-full bg-gray-200 rounded-lg border border-gray-200 hover:border-gray-500 px-4 py-3 pr-8 leading-tight focus:outline-none focus:shadow-outline" style="font-family: 'Poppins', sans-serif;">
                                    <option>Farming</option>
                                </select>
                                <div class="absolute right-0 -mt-2 flex items-center px-2 text-gray-700 pointer-events-none">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    <p class="text-xl text-green-500 my-4 font-bold">Contact Details</p>
                    <div class="flex blo-ck -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="pn" class="block text-sm leading-5 font-medium text-gray-700">Phone Number</label>
                            <input id="pn" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="Phone" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="flex blo-ck -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="email" class="block text-sm leading-5 font-medium text-gray-700">Email*</label>
                            <input id="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="flex blo-ck -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="url" class="block text-sm leading-5 font-medium text-gray-700">Website URL</label>
                            <input id="url" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="url" name="url" placeholder="Url" required>
                        </div>
                    </div>
                    <button class="bg-green-500 py-2 px-6 my-4 font-bold text-white rounded-lg">Apply</button>
                </form>
                <p class="text-2xl text-green-500 font-bold">Sign In & Security</p>
                <p class="text-lg my-6 text-green-700 font-bold">Change Password</p>
                <form action="">
                    <div class="flex blo-ck -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="currpass" class="block text-sm leading-5 font-medium text-gray-700">Current Password</label>
                            <input id="currpass" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="password" name="currentpassword" placeholder="" required>
                        </div>
                    </div>
                    <div class="flex blo-ck -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="newpass" class="block text-sm leading-5 font-medium text-gray-700">New Password</label>
                            <input id="newpass" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="password" name="newpassword" placeholder="8 Characters" required>
                        </div>
                    </div>
                    <div class="flex blo-ck -mx-2 max-w-xl">
                        <div class="mx-2 w-full">
                            <label for="renewpass" class="block text-sm leading-5 font-medium text-gray-700">Re-type New Password</label>
                            <input id="renewpass" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="password" name="retypenewpassword" placeholder="8 Characters" required>
                        </div>
                    </div>
                    <button class="bg-green-500 py-2 px-6 my-4 font-bold text-white rounded-lg">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection