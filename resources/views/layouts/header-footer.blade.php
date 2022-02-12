<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHolo | username</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="px-8 py-8 bg-white">
        <h1 class="text-4xl text-gray-900">Header</h1>
    </div>

    <div class="container px-6 py-8 mx-auto">
        @yield('content')
    </div>

    <div class="container px-6 py-8 mx-auto">
        <div class="mt-12 border"></div>
        <img class="mt-12 w-16" src="{{ asset('assets/logo-green.svg') }}" alt="logo" />
        <div class="mt-8 flex flex-row">
            <div class="w-1/5 text-gray-600 text-sm">
                <nav class="flex flex-col space-y-2">
                    <a href="#">About</a>
                    <a href="#">Community Guidelines</a>
                    <a href="#">Privacy & Terms</a>
                    <a href="#">Sales Solutions</a>
                    <a href="#">Safety Center</a>
                </nav>
            </div>
            <div class="w-1/5 text-gray-600 text-sm">
                <nav class="flex flex-col space-y-2">
                    <a href="#">About</a>
                    <a href="#">Community Guidelines</a>
                    <a href="#">Privacy & Terms</a>
                    <a href="#">Sales Solutions</a>
                    <a href="#">Safety Center</a>
                </nav>
            </div>
            <div class="w-1/5 text-gray-600 text-sm">
                <nav class="flex flex-col space-y-2">
                    <a href="#">About</a>
                    <a href="#">Community Guidelines</a>
                    <a href="#">Privacy & Terms</a>
                    <a href="#">Sales Solutions</a>
                    <a href="#">Safety Center</a>
                </nav>
            </div>
            <div class="w-1/5 text-gray-600 text-sm">
                <div class="flex flex-col space-y-4">
                    <div class="flex flex-row space-x-2">
                        <div class="">
                            <img class="w-6" src="{{ asset('assets/questions-icon.svg') }}" alt="icon" />
                        </div>
                        <div class="">
                            <h4 class="font-bold">Questions</h4>
                            <span class="text-sm">Visit our Help Center</span>
                        </div>
                    </div>
                    <div class="flex flex-row space-x-2">
                        <div class="">
                            <img class="w-6" src="{{ asset('assets/settings.svg') }}" alt="icon" />
                        </div>
                        <div class="">
                            <h4 class="font-bold text-green-500">Manage your account and privacy</h4>
                            <span class="text-sm">Go to your Settings.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/5 text-gray-600 text-sm">
                <h1 class="text-gray-900">Select Language</h1>
                <select class="mt-2 px-4 py-4 w-full text-green-500 bg-gray-100 border border-green-500 rounded-md">
                    <option>English (English)</option>
                    <option>French</option>
                </select>
            </div>
        </div>
        <div class="py-6">
            <p class="text-xs text-gray-600">GreenHolo © 2020</p>
        </div>
    </div>

</body>
</html>
