<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apartment Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Add your custom background color */
        .custom-bg {
            background-color: #f0f0f0; /* Replace with your desired color */
        }
    </style>
</head>
<body class="flex flex-col items-center justify-center h-screen custom-bg">
    <h2 class="text-3xl font-semibold mb-4">Welcome to Apartment Management System</h2>
    <div class="text-center">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="text-white bg-blue-500 hover:bg-blue-600 font-semibold py-2 px-6 rounded-full shadow-md transition duration-300 inline-block my-2">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-white bg-green-500 hover:bg-green-600 font-semibold py-2 px-6 rounded-full shadow-md transition duration-300 inline-block my-2">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-6 rounded-full shadow-md transition duration-300 inline-block my-2">Register</a>
                @endif
            @endauth
        @endif
    </div>
    <div class="mt-8 text-center text-gray-500">
        <div>APMS © 2023 Pondit batch 06.</div>
        <div>
        Coordination by <a href="https://www.linkedin.com/in/tahsinabrar/?originalSubdomain=bd" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Tahsin Abrar</a>
        </div>
    </div>
</body>
</html>
