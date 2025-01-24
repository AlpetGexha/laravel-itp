<x-layout headerName="Qytetart">
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
                    @forelse ($qytetaret as $qytetar)
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
                    @empty
                        <td>
                            KA JE NIS PA QYTATAR
                        </td>
                    @endforelse

                </tbody>
            </table>
        </div>
    </main>
</x-layout>