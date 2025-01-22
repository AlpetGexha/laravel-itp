<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qytetarët</title>
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-green-600 text-white">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <span class="text-2xl font-semibold">Lista e qytetareve</span>
            </div>
            <nav>
                <ul class="flex space-x-6 text-lg">
                <a href="{{ url('/qytetet/qytetet') }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Shiko Qytetet</a>
                    <a href="{{ route('qytetaret.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Shto Qytetar</a>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mx-auto px-4 py-8 flex-grow">
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Të dhënat e qytetarëve</h2>
            <p class="text-gray-600">Shikoni dhe menaxhoni listën e qytetarëve</p>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-300 rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-800">
                        <th class="border border-gray-300 px-4 py-2 text-center">ID</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Emri</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Mbiemri</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Gjinia</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Viti i Lindjes</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($qytetaret as $qytetar)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $qytetar->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ url('/qytetaret/' . $qytetar->id) }}" class="text-blue-500 hover:underline">
                                    {{ $qytetar->emri }}
                                </a>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{ $qytetar->mbiemri }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $qytetar->gjinia }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $qytetar->viti_i_lindjes }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <a href="{{ url('/qytetaret/' . $qytetar->id) }}"
                                class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Detaje</a>
                                <a href="{{ url('/qytetaret/' . $qytetar->id . '/edit') }}"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer class="bg-green-800 text-white py-4 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p>Laravel Project. Të gjitha të drejtat e rezervuara.</p>
        </div>
    </footer>
</body>
</html>