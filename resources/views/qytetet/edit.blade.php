<x-layout headerName="Update">
    <main class="container mx-auto px-4 py-8 flex-grow">
        <form action="{{ route('qytetet.update', $qytet->id) }}" method="POST"
              class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Name:</label>
                <input type="text" name="name" id="name" value="{{ $qytet->name }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-500">
                Update
            </button>
        </form>
    </main>
</x-layout>

