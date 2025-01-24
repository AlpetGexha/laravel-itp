@props([
    'headerName' => ''
])

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ $headerName }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 via-indigo-700 to-purple-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <span class="text-2xl font-bold tracking-wide">{{ $headerName }}</span>
            </div>
            <nav>
                <ul class="flex space-x-6 text-base">
                    <li>
                        <a  href="{{ route('qytetet.index') }}" 

                                                      class="text-white hover:text-gray-200 px-3 py-1 border-b-2 border-transparent hover:border-gray-200">Shiko Qytetet</a>
                    </li>
                    <li>
                        <a  href="{{ route('qytetaret.index') }}" 
                           
                           class="text-white hover:text-gray-200 px-3 py-1 border-b-2 border-transparent hover:border-gray-200">Shiko Qytetarët</a>
                    </li>
                    <li>
                        <a  href="{{ route('qytetaret.create') }}" 

                                                      class="text-white hover:text-gray-200 px-3 py-1 border-b-2 border-transparent hover:border-gray-200">Shto Qytetar</a>
                    </li>
                    <li>

                        <a href="{{ route('qytetet.create') }}" 

                                                      class="text-white hover:text-gray-200 px-3 py-1 border-b-2 border-transparent hover:border-gray-200">Shto Qytete</a>
                    </li>
                </ul>
            </nav>
        </div>
</header>
    
    <!-- Main Content -->
    <main class="flex-grow">
        <div class="container mx-auto px-4 py-8 bg-white shadow-sm rounded-md">
            <x-alert />
            {{ $slot }}
        </div>
</main>
    
    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-800 via-gray-700 to-gray-900 text-gray-300 py-4 mt-auto">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Laravel Project. Të gjitha të drejtat e rezervuara.</p>
        </div>
    </f
ooter>
</body></html>
