<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto Qytetar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <div class="container mx-auto px-4 py-8 flex-grow">
        <div class="big-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Shto Qytetar</h1>

            <form action="{{ route('qytetaret.store') }}" method="POST" class="mt-6">
                @csrf
                <div class="mb-4">
                    <label for="emri" class="block text-lg font-semibold">Emri</label>
                    <input type="text" id="emri" name="emri" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="mbiemri" class="block text-lg font-semibold">Mbiemri</label>
                    <input type="text" id="mbiemri" name="mbiemri" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="gjinia" class="block text-lg font-semibold">Gjinia</label>
                    <select id="gjinia" name="gjinia" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                        <option value="M">Mashkull</option>
                        <option value="F">Femer</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="viti_i_lindjes" class="block text-lg font-semibold">Viti i Lindjes</label>
                    <input type="number" id="viti_i_lindjes" name="viti_i_lindjes" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Ruaj
                </button>
            </form>
        </div>
    </div>
</body>

</html>
