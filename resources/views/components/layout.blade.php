@props([
'headerName' => ''
])

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <title></title>--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<header class="bg-green-600 text-white">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <span class="text-2xl font-semibold">{{ $headerName }}</span>
        </div>
        <nav>
            <ul class="flex space-x-6 text-lg">
                <a href="{{ url('/qytetet/qytetet') }}"
                   class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Shiko Qytetet</a>
                <a href="{{ route('qytetaret.index') }}"
                   class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Shiko Qytetart</a>
                <a href="{{ route('qytetaret.create') }}"
                   class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Shto Qytetar</a>
                <a href="{{ route('qytetet.create') }}"
                   class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Shto Qytete</a>
            </ul>
        </nav>
    </div>
</header>


<main>
    <x-alert />
    {{ $slot }}
</main>

<footer class="bg-green-800 text-white py-4 mt-8">
    <div class="container mx-auto px-4 text-center">
        <p>Laravel Project. Të gjitha të drejtat e rezervuara.</p>
    </div>
</footer>
</body>

</html>
