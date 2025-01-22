<x-layout headerName="Shto Qytete">
    <div class="container mx-auto px-4 py-8 flex-grow">
        <div class="big-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Shto Qytete</h1>

            <x-errors />

            <form action="{{ route('qytetet.store') }}" method="POST" class="mt-6">
                @csrf
                <div class="mb-4">
                    <label for="emri" class="block text-lg font-semibold">Emri</label>
                    <input type="text" id="emri" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md"
                           required>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Ruaj
                </button>
            </form>
        </div>
    </div>
</x-layout>
