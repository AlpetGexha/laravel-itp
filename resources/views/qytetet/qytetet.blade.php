<x-layout headerName="Qytetet">
    <div class="container mx-auto px-4 py-8 flex-grow">
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
                        <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($qytetet as $city)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $city->id }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $city->name }}</td>

                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <a href="{{ route('qytetet.show', $city) }}"
                                    class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Detaje</a>
                                <a href="{{ route('qytetet.edit', $city) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>

                                <form action="{{ route('qytetet.destroy', $city) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            NUK NA KAN MET QYTET PER SOT MO
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>