<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <script src="https://cdn.tailwindcss.com"></script>
        </head>

    <body class="h-screen flex flex-col">

    @include('layouts.header')

    <main class="container grow max-w-[70%] mx-auto p-10 flex gap-10">
        <div class="flex flex-col border-2 border-gray-200 rounded-lg w-full p-4">
            @yield('content')
        </div>
    </main>

    @include('layouts.footer')

    </body> 
</html>