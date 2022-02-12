<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHolo</title>

    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="">
    <div class="mt-6 px-8 py-12 max-w-xl mx-auto">
        <div class="flex justify-center">
        <a href="{{ url('/') }}"><img src="{{ asset('assets/logo-green.svg') }}" alt="GreenHolo" /> </a>
        </div>
        <h3 class="mt-6 text-2xl font-semibold text-center text-gray-900">Make the most out of your professional life</h1>
        <div class="mt-6 px-10 py-10 border border-green-500 rounded-lg">
            <div>
                <label class="text-gray-900">Email</label>
            </div>
            <input class="mt-2 px-4 py-4 rounded-lg text-md text-gray-900 border border-green-500 w-full focus:outline-none focus:shadow-outline " type="text" placeholder="Enter email" />
            <div class="mt-6">
                <label class="text-gray-900">Password (6 or more characters)</label>
            </div>
            <input class="mt-2 px-4 py-4 rounded-lg text-md text-gray-900 border border-green-500 w-full focus:outline-none focus:shadow-outline " type="password" placeholder="Enter password" />
            <div class="mt-6 text-xs text-center">
                <a class="text-gray-900" href="#">By signing up, you agree to the GreenHolo <a class="font-semibold text-green-500" href="#">User Agreement</a>, <a class="font-semibold text-green-500" href="#">Privacy Policy</a>, and <a class="font-semibold text-green-500" href="#">Cookie Policy</a>. </a>
            </div>
            <div class="mt-6">
                <button class="py-4 w-full bg-green-500 hover:bg-green-400 active:bg-green-600 focus:outline-none focus:shadow-outline text-white text-lg rounded-lg font-semibold shadow-lg">Sign Up</button>
            </div>
            <p class="mt-6 text-xs text-center text-gray-900">Already on GreenHolo? <a class="font-semibold text-green-500" href="{{ url('/signin') }}">Sign in</a></p>
        </div>
    </div>
    
</body>
</html>