<x-layout headerName="Detajet">
    <div class="container mx-auto px-4 py-8 flex-grow">
        <div class="mb-4 flex items-strech justify-between">
            <a href="{{ url('/') }}"
               class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 focus:outline-none focus-ring focus:ring-green-500">&larr;
                Kthehu tek tabela</a>
            <a href="{{ url('/qytetaret/' . $qytetar->id . '/edit')}}"
               class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Edit</a>
        </div>

        <div class="big-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Detajet e qytetarit</h1>
            <p class="text-lg"><strong>ID:</strong> {{ $qytetar->id }} </p>
            <p class="text-lg"><strong>Emri:</strong> {{ $qytetar->emri }} </p>

            <p class="text-lg"><strong>Mbiemri:</strong> {{ $qytetar->mbiemri }} </p>
            <p class="text-lg"><strong>Gjinia:</strong> {{ $qytetar->Gjinia }} </p>
            <p class="text-lg"><strong>Viti i Lindjes:</strong> {{ $qytetar->viti_i_lindjes }} </p>
        </div>
    </div>
</x-layout>
